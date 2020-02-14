<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rating extends Controller
{
    public function index(){
        $arr = \App\Article::all()->sortByDesc('likes')->values();
        $result = $arr->filter(function($el){
           if($el->isPublished()){
               return $el;
           }
        });
        //dd($result);
        return view('rating', ['dataset'=>$result]);
    }
}
