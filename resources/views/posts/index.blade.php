<html>
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <a href="/create">Add New Post</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Body</th>
            <th>Title</th>
        </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['name']}}</td>
        <td>{{$post['body']}}</td>
        <td>{{$post['title']}}</td>
        <td><a href="/show/{{ $post['id']}}">Show</a></td>
        <td><a href="/edit/{{ $post['id']}}">Edit</a><td>
    </tr>
    @endforeach


    </table>
</body>
</html>