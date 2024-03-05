<h1>detalhes do post {{$post->title}}</h1>
<ul>
    <li><strong>Título: </strong>{{$post->title}}</li>
    <li><strong>conteudo: </strong>{{$post->content}}</li>
</ul>

<form action="{{route('posts.destroy',$post->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o post: {{$post->title}}</button>
</form>