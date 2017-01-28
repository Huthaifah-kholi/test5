<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{

    // post article to data base & show pop-up window for user
    public function addArticle(Request $request)
    {
        $newArticle= new Article();
        $newArticle->title = $request->input('title');
        $newArticle->author = $request->input('author');
        $newArticle->articleBody = $request->input('articleBody');
        $newArticle->save();

        return view('popup');
    }

    // for routing to 'home' page
    public function homeRoute()
    {
        $article = Article::all();
        $arrayArticle = Array('article' => $article);
        return view('home',$arrayArticle);
    }

    // for routing to 'addArticle' page
    public function addArticleRoute()
    {
        return view('addArticle');
    }

}
