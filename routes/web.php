<?php

use App\Http\Controllers\CommentsController;

Route::get('/todo'         , 'TasksController@index'   )->name('todo');
Route::get('/todo/{task}'  , 'TasksController@show'    )->name('tasks');;
Route::get('/'              , 'PostsController@index'   )->name('home');;
Route::get('/posts/create'  , 'PostsController@create'  )->name('create');
Route::post('/posts'        ,'PostsController@store'     )->name('posts');
Route::get('/posts/{post}'  , 'PostsController@show'    );
Route::post('posts/{post}/comments', 'CommentsController@store');

Auth::routes();
 
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){

    Route::get  ('/login', 'Auth\AdminloginController@showLoginForm')->name('admin.login');

    Route::post ('/login', 'Auth\AdminloginController@login'        )->name('admin.login.submit');

    Route::get  ('/',      'AdminController@index'                  )->name('admin.dashboard');

});

