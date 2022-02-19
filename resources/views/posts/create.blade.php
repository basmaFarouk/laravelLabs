@extends("site_layouts.app")
@section("content")

<form action="/posts" method="post">
    @csrf

  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control"  name="title" value="{{old('title')}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <input type="text" class="form-control" name="description" value="{{old('description')}}">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@include("shared.errors")

@endsection