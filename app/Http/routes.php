<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "ArticleController@homeRoute");

Route::post('addArticle', "ArticleController@addArticle");

Route::get('addArticle', "ArticleController@addArticleRoute");

Route::get('popup', function()
{
    return view('popup');
});
