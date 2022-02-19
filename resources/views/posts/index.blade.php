@extends("site_layouts.app")
@section("content")
    <a href="/posts/create">Add New Post</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Title</th>
            <th>description</th>
            <th>Created at</th>
        </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->user->email}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['description']}}</td>
        <td>{{$post['created_at']}}</td>
        <td><a href="/posts/{{ $post['id']}}">Show</a></td>
        <td><a href="/posts/{{ $post['id']}}/edit">Edit</a><td>
        <td>
            <form action="/posts/{{ $post['id']}}" method="post">
                @csrf
                @method("DELETE")
                <input type="submit" name="delete" value="Delete">
            </form>
        <td>
    </tr>
    @endforeach
@endsection