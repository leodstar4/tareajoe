<html>
    <head>
        <title>Hola broskis</title>
    </head>

    <body>
        <div>
            @forelse($data as $article)
                <div>
                    <p>{{$article->title}}</p>
                    <p>{{$article->content}}</p>

                    <a href="/articles/{{$article->id}}">Ver</a>

                    <a href="/articles/{{$article->id}}/edit">Editar</a>

                    <form method="POST" action="/articles/{{$article->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            @empty
                <div>
                    No articles... yet
                </div>
            @endforelse
        </div>

        <form method="POST" action="/articles/new">
            @csrf
            <p>Titulo<input type="text" name="title" placeholder="Title"></p>
            <p>Contenido<input type="text" name="content" placeholder="Content"></p>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>