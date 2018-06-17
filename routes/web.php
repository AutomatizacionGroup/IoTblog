<?php

Route::get('/tasks'         , 'TasksController@index'   )->name('tasks');
Route::get('/tasks/{task}'  , 'TasksController@show'    );
Route::get('/'              , 'PostsController@index'   );
//Route::get('/posts/{post}'  , 'PostsController@show'    );
Route::get('/posts/create'  , 'PostsController@create'  );
Route::post('/posts'        ,'PostController@store'     );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get  ('/login',      'Auth\AdminloginController@showLoginForm')  ->name('admin.login');
    Route::post ('/login',      'Auth\AdminloginController@login')          ->name('admin.login.submit');
    Route::get  ('/',           'AdminController@index')                    ->name('admin.dashboard');
});

