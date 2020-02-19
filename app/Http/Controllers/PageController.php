<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PageController extends Controller
{
    public function about()
    {
        $body = ['content' => 'lorem ipsum dolores sit amet!'];
        return view('about', ['body' => $body]);
    }

    public function articles()
    {
        $arts = \App\Article::all();
        return view('articles', ['arts' => $arts]);
    }

    public function show($id)
    {
        $article = \App\Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function index(Request $req)
    {
        $q = $req->input('q');
        $arts = Article::where('name', 'like', "%{$q}%")->get();
        //dd($q, $articles);
        return view('articles', compact('arts', 'q'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(Request $req)
    {
            $this->validate($req, [
                'name' => 'required|unique:articles',
                'body' => 'required|min:1000',
            ]);

        $article = new Article();
        $article->fill($req->all());
        $article->save();
        $req->session()->flash('status', 'art stored!');
        return redirect()
            ->route('articles.index');
    }
    public function update(Request $req, $id){
        $article = Article::findOrFail($id);
        $this->validate($req, [
            'name' => 'required|unique:articles,name,' . $article->id,
            'body' => 'required|min:100',
        ]);

        $article->fill($req->all());
        $article->save();
        return redirect()
            ->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

}
