<h1>Editar o Post<strong>{{$post->title}}</strong></h1>
@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
@endif
<form action="{{route('posts.store')}}" method="post">
    @csrf <!-- passa o token csrf por seguranca -->
    <input type="text" name="title" id="title" placeholder="Título" value="{{post->title)}}">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo" >{{post->content}}</textarea>
    <button type="submit">Enviar</button>
</form>