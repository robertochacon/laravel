@extends('layout.app')

@section('title','edit')
@section('content')

<div class="col-sm-12 col-md-8 bg-light" style="margin:auto;">

@include('common.errors')

<div class="container mt-5">
<form method="POST" action="{{ route('Post.update',$info->slug) }}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Title</label>
            <div class="col-12">
              <input class="form-control" type="text" name="title" value="{{ $info->title }}" id="example-text-input">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-text-slug" class="col-2 col-form-label">Slug</label>
            <div class="col-12">
              <input class="form-control" type="text" name="slug" value="{{ $info->slug }}" id="example-text-slug">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleTextarea">Description</label>
            <textarea class="form-control" name="description" value="" id="exampleTextarea" rows="3">{{ $info->description }}</textarea>
          </div>
          <img class="mb-2" src="../../../public/imagenes/{{ $info->avatar }}" style="width:150px;height:150px;background:gray;">
          <div class="form-group row">
            <label for="example-text-avatar" class="col-2 col-form-label">Imagen</label>
            <div class="col-10">
              <input type="file" name="avatar" id="example-avatar">
            </div>
          </div>
        <button type="submit" class="btn btn-primary mb-5">Edit</button>
</form>
</div>

</div>
@endsection('content')
