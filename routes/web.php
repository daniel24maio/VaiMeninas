<?php

Route::get('/', 'WebController@home')->name('home');
Route::get('/vaimeninas','WebController@vaimeninas')->name('vaimeninas');
Route::get('/blog', 'WebController@blog')->name('blog');
Route::get('/blog/{uri}','WebController@article')->name('article');
Route::get('/contato','WebController@contact')->name('contact');

Route::post('/send-mail', 'WebController@sendMail')->name('send-mail');
