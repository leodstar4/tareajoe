<html>
<body>
    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('PUT')
        <p>Titulo<input type="text" name="title" value="{{ $article->title }}"></p>
        <p>Contenido<input type="text" name="content" value="{{ $article->content }}"></p>
        <button type="submit">Actualizar</button>
    </form>
    <a href="/articles">Cancelar</a>
</body>
</html>