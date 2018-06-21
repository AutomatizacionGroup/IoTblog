<?php

use App\Http\Controllers\CommentsController;

Route::get  ('/todo'                  ,'TasksController@index'        )->name('todo');
Route::get  ('/todo/{task}'           ,'TasksController@show'         )->name('tasks');;
Route::get  ('/'                      ,'PostsController@index'        )->name('home');;
Route::get  ('/posts/create'          ,'PostsController@create'       )->name('create');
Route::post ('/posts'                 ,'PostsController@store'        )->name('posts');
Route::get  ('/posts/{post}'          ,'PostsController@show'         );
Route::post ('posts/{post}/comments'  ,'CommentsController@store'     );
Route::get  ('/home'                  ,'PostsController@home'          )->name('home');
Route::get  ('/iotconsumer'           ,'PostsController@iothome'       )->name('iothome');
Route::get  ('/iotindustry'           ,'PostsController@iotindustry'   )->name('iotindustry');
Route::get  ('/iotvalue'              ,'PostsController@iotvalue'      )->name('iotvalue');
Route::get  ('/original'            ,'homecontroller@original'      )->name('original');

Auth::routes();
 
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){

    Route::get  ('/login', 'Auth\AdminloginController@showLoginForm')->name('admin.login');

    Route::post ('/login', 'Auth\AdminloginController@login'        )->name('admin.login.submit');

    Route::get  ('/',      'AdminController@index'                  )->name('admin.dashboard');

});

