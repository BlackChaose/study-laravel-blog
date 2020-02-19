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
}
