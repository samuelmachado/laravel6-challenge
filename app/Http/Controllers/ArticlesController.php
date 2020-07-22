<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

       
        return view('articles.index', [
            'articles' => $articles
        ]);
    }
    public function show(Article $article)
    {
       
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {

     
        Article::create($this->validateArticle());

    //    $validatedAttributes = request()->validate([
    //         'title' => ['required', 'min:3', 'max:5'],
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //    ]);
    //     Article::create($validatedAttributes);



    //    $article = new Article();
    //    $article->title = request('title');
    //    $article->excerpt = request('excerpt');
    //    $article->body = request('body');
    //    $article->save();

       
       return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));

    }

    public function update(Article $article)
    {
      
        $article->update($this->validateArticle());
      
        return redirect('/articles/'.$article->id);
    }

    public function destroy()
    {

    }
    protected function validateArticle(){
        return request()->validate([
            'title' => ['required', 'min:3', 'max:5'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
