<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('about',function(){
    return view('about');
});
Route::get('tasks/show','TasksController@index');
Route::get('tasks/{tasks}','TasksController@show');
Route::get('posts','PostsController@index');
Route::get('posts/create','PostsController@create');
Route::post('posts','PostsController@store');
Route::get('posts/{post}','PostsController@show');
Route::post('posts/{post}/comment','CommentsController@store');
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register','RegistrationController@create');
Route::get('/login','SessionController@index');
Route::post('/register','RegistrationController@store');
Route::get('/logout','SessionController@destroy');
Route::post('/login','SessionController@login'); 