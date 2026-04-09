<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $Articles = Article::all();
        return view('list_articles', ['data' => $Articles]); 
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string'
        ]);
        Article::create([
            'title' => $validated['title'],
            'content' => $validated['content']
        ]);
        return redirect('/articles');
    }

    // SHOW - mostrar un artículo específico
    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('show_article', ['article' => $article]);
    }

    // EDIT - mostrar formulario de edición
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        return view('edit_article', ['article' => $article]);
    }

    // UPDATE - guardar los cambios
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string'
        ]);

        $article = Article::findOrFail($id);
        $article->update([
            'title' => $validated['title'],
            'content' => $validated['content']
        ]);

        return redirect('/articles');
    }

    // DESTROY - eliminar un artículo
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/articles');
    }
}