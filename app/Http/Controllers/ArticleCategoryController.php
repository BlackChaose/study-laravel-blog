<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleCategoryController extends Controller
{
    public function index(){
        $articles = Article::paginate($page = 1);
        return view('article_category.index', ['articles' => $articles ]);
    }
}
