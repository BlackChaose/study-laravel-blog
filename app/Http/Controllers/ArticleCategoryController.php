<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ArticleCategoryController extends Controller
{
    public function index(){
        $articles = ArticleCategory::all();
        return view('article_category.index', ['articles' => $articles]);
    }
    // BEGIN
    public function create()
    {
        $category = new ArticleCategory();
        return view('article_category.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:article_categories',
            'description' => 'required|min:200',
            'state' => [
                'required',
                Rule::in(['draft', 'published']),
            ]
        ]);

        $category = new ArticleCategory();
        $category->fill($request->all());
        $category->save();

        return redirect()
            ->route('article_categories.index');
    }
    // END
}
