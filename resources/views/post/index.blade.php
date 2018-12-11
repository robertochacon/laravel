@extends('layout.app')

@section('title', 'Inicio')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Crud laravel ajax</h1>
		<a href="{{ route('Post.create') }}" class="btn btn-primary pull-right">Agregar Post</a>
<div class=" mt-5">
	<div class="row">
	@foreach($post as $item)
	<div class="col-md-4">
	<div class="container">
	<div class="card" style="width: 18rem;box-shadow: 1px 2px 3px black;background: black;color:white;">
		<img class="card-img-top rounded-circle mx-auto d-block mt-5" src="imagenes/{{ $item->avatar }}" style="width:150px;height:150px;background:gray;">
		<div class="card-body">
		<h5 class="card-title">{{ $item->title }}</h5>
		<p class="card-text">{{ $item->description }}</p>
		<a href="{{ route('Post.show',$item->id) }}" class="btn btn-primary">Go</a>
		</div>
	</div>
	</div>
	</div>
	@endforeach()
	</div>
</div>
		</table>
	</div>
</div>

@endsection