@extends('layout.app')

@section('title', 'Inicio')

@section('content')

@include('common.success')

<div class="row">
	<div class="col-md-12">
		<a href="{{ route('Post.create') }}" class="btn btn-primary right mt-2">Agregar Post</a>
<div class=" mt-2">
	<div class="row">
	@foreach($post as $item)
	<div class="col-sm-12 col-md-6 col-lg-4 mt-2">
	<div class="container">
	<div class="card text-center" style="box-shadow: 1px 2px 3px black;background: black;color:white;">
		<img class="card-img-top  mx-auto d-block" src="imagenes/{{ $item->avatar }}" style="width:100%;height:200px;background:gray;">
		<div class="card-body">
		<h5 class="card-title">{{ $item->title }}</h5>
		<p class="card-text">{{ $item->description }}</p>
		<a href="{{ route('Post.show',$item->slug) }}" class="btn btn-primary">Go</a>
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