@extends('layout.app')

@section('title','create')
@section('content')


<div class="col-sm-12 col-md-8 bg-light" style="margin: auto;">
@include('common.errors')
  
<div class="container mt-5">
<form method="POST" action="{{ route('Post.store') }}" enctype="multipart/form-data">
  @csrf
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Title</label>
            <div class="col-12">
              <input class="form-control" type="text" name="title" id="example-text-input">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-text-slug" class="col-2 col-form-label">Slug</label>
            <div class="col-12">
              <input class="form-control" type="text" name="slug" id="example-text-slug">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleTextarea">Description</label>
            <textarea class="form-control" name="description" id="exampleTextarea" rows="3"></textarea>
          </div>
          <div class="form-group row">
            <label for="example-text-avatar" class="col-2 col-form-label">Imagen</label>
            <div class="col-10">
              <input type="file" name="avatar" id="example-avatar">
            </div>
          </div>
        <button type="submit" class="btn btn-primary mb-5">Send</button>
</form>
</div>

@endsection('content')
