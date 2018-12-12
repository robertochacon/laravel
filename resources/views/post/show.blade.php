@extends('layout.app')

@section('title','detalle')

@section('content')

@include('common.success')

<img class="rounded-circle mx-auto d-block mt-5" src="../../public/imagenes/{{ $info->avatar }}" style="width:250px;height:250px;background:gray;">
	<div class="card-body">
		<h1 class="card-title text-center text-white">{{ $info->title }}</h1>
		<p class="card-text text-center text-white">{{ $info->description }}</p>
		<center>
			<a href="{{ route('Post.edit',$info->slug,'edit') }}" class="btn btn-primary text-center btn-large">Editar</a>
			<form action="{{ route('Post.destroy',$info->slug) }}" method="post">
				@method('DELETE')
				@csrf
				<input type="submit" class="btn btn-danger" value="Eliminar">
			</form>
		</center>
	</div>

@endsection('conten')