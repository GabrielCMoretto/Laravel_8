<h1>Post novo</h1>
@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
@endif
<form action="{{route('posts.store')}}" method="post">
    @csrf <!-- passa o token csrf por seguranca -->
    <input type="text" name="title" id="title" placeholder="Título" value="{{old('title')}}">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo" >{{old('content')}}</textarea>
    <button type="submit">Enviar</button>
</form>