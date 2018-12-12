@if($errors->any())
<div class="alert alert-danger mt-2">
  @foreach($errors->all() as $error)

  <h4>{{ $error }}</h4>      

  @endforeach()
</div>
@endif()