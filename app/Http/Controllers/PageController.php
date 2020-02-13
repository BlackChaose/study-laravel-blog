<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //fixme: see lessonController!!!
    public function about(){
        $body = ['content'=>'lorem ipsum dolores sit amet!'];
        return view('about',['body'=>$body]);
    }
    public function articles(){
        $arts = \App\Article::all();
        return view('articles', ['arts'=>$arts]);
    }
}
