@extends('layout.app')

@section('title','detalle')

@section('content')

<img class="rounded-circle mx-auto d-block mt-5" src="../../public/imagenes/{{ $info->avatar }}" style="width:250px;height:250px;background:gray;">
	<div class="card-body">
		<h1 class="card-title text-center text-white">{{ $info->title }}</h1>
		<p class="card-text text-center text-white">{{ $info->description }}</p>
	</div>

@endsection('conten')