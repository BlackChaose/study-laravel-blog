<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use Illuminate\Http\Request;


class ArticleCategoryController extends Controller
{
    public function index(){
        $articles = ArticleCategory::all();
        return view('article_category.index', ['articles' => $articles]);
    }
}
