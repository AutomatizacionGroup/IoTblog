<?php

Route::get('/tasks'         , 'TasksController@index'   );
Route::get('/tasks/{task}'  , 'TasksController@show'    );
Route::get('/'              , 'PostsController@index'   );
Route::get('/posts/{post}'  , 'PostsController@show'    );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'adminController@index');
