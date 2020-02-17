<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APp\Article;

class ArticleCategoryController extends Controller
{
    public function index(){
        $articles = Article::paginate($page = 10);
        return view('',compact('artciles'));
    }
}
