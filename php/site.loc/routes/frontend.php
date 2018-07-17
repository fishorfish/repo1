<?php

Route::get('/front', 'FrontController@index');
Route::get('/eng', 'FrontController@page1');
Route::get('/gem', 'FrontController@page2');
Route::get('/rus', 'FrontController@page3');
Route::get('/fran','FrontController@page4');
Route::get('/ukr', 'FrontController@page5');
Route::post('/', 'FrontController@redir');
//Route::get('/', 'FrontController@redir');
