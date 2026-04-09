<html>
<body>
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <a href="/articles">Volver</a>
    <a href="/articles/{{ $article->id }}/edit">Editar</a>
</body>
</html>