<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        $body = ['content'=>'lorem ipsum dolores sit amet!'];
        return view('about',['body'=>$body]);
    }
    public function articles(){
        $arts = \App\Article::all();
        return view('articles', ['arts'=>$arts]);
    }
    public function show($id){
        $article = \App\Article::findOrFail($id);
        return view('article.show', compact('article'));
    }
}
