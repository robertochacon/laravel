<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataValidate = $request->validate([
            'title' => 'required|max:30',
            'description' => 'required|max:200',
            'avatar' => 'required|image',
            'slug' => 'required|max:30',
        ]);

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $name = time().$image->getClientOriginalName();
            $image->move(public_path().'/imagenes/',$name);
        }

        $obj = new Post();
        $obj->title = $request->input('title');
        $obj->description = $request->input('description');
        $obj->avatar = $name;
        $obj->slug = $request->input('slug');
        $obj->save();

        return redirect()->route('Post.index')->with('status','Datos guardados sastifactoriamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        // $info = Post::find($id);   
        $info = Post::where('slug','=',$slug)->firstOrFail();   
        return view('Post.show',compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $info = Post::where('slug','=',$slug)->firstOrFail();   
        // $info = Post::find($slug);   
        return view('Post.edit',compact('info'));
        // return $info;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $dataValidate = $request->validate([
            'title' => 'required|max:30',
            'description' => 'required|max:200',
            'avatar' => 'required|image',
            'slug' => 'required|max:30',
        ]);

        $data = Post::where('slug',$slug)->firstOrFail();
        $data->update($request->all());
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$name);
        }
        $data->avatar = $name;
        $data->slug = $request->input('slug');
        $data->save();

        // return 'actualizado';
        return redirect()->route('Post.show',[$slug])->with('status','Datos actualizados');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $avatar = Post::where('slug',$slug)->pluck('avatar')->first();
        $archivo = public_path().'/imagenes/'.$avatar;
        \File::delete($archivo);
        Post::where('slug',$slug)->delete();
        // return $archivo;
        return redirect()->route('Post.index')->with('status','Un articulo eliminado');
    }
}
