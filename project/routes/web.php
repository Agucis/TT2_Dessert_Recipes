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

Route::get('/', 'PagesController@getIndex');



Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/recipes', function () {
    return view('recipes');
});

Route::get('/pancake', function () {
    return view('pancake');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::resource('posts', 'PostsController');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admins', 'AdminController@index')->name('admins');
//Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('/logout', 'Controller@logout');
Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/posts/details/{id}', 'PostsController@details')->name('posts.details');
Route::get('/posts/add', 'PostsController@add')->name('posts.add');
Route::post('/posts/insert', 'PostsController@insert')->name('posts.insert');
Route::get('/posts/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::post('/posts/update', 'PostsController@update')->name('posts.update');
Route::get('/posts/delete/{id}', 'PostsController@delete')->name('posts.delete');
