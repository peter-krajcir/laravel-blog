<?php

Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

// Route::get('/posts/{post}', 'PostsController@show');