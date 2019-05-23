<?php


Route::get('/','Home\IndexController@index');
Route::get('/book','Home\BookController@index');
Route::get('/article','Home\ArticleController@index');
Route::get('/top','Home\TopController@index');