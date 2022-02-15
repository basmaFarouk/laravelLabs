
    @foreach ($posts as $post)
        @for($i=0;$i<count($post);$i++)

        {{ $post['id'] }} 
        @endfor
        <a href="/show/{{ $post['id']}}">Show</a>

    @endforeach

