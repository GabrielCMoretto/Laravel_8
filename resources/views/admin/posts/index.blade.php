<a href="{{route('posts.create')}}">Novo post</a> <!-- podia usar /posts/create, mas assim eh melhor -->

@if (session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

<h1>posts</h1>

@foreach($posts as $post)
    <p>
        {{$post->title}}
            [<a href="{{route('posts.show',$post->id)}}">Ver</a>] |
            [<a href="{{route('posts.edit',$post->id)}}">Editar</a>]
    </p>
@endforeach