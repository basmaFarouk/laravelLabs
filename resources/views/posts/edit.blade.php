@extends("site_layouts.app")
@section("content")

<form action="/posts/{{$id}}" method="post">
    @csrf
    @method("PATCH")
  <div class="mb-3">
  <label class="form-label">ID</label>
    <input type="text" class="form-control" value="{{$id}}" name="id">
  </div>
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" value="{{$title}}" name="title">
  </div>
  <div class="mb-3">
    <label class="form-label">Body</label>
    <input type="text" class="form-control" value="{{$description}}" name="description">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('shared.errors')

@endsection