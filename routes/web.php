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

//blog
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
        ->where('slug', '[\w\d\-\_]+');

Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

//contact page
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');

//about page
Route::get('about', 'PagesController@getAbout');

//home page
Route::get('/', 'PagesController@getIndex');

//posts
Route::resource('posts', 'PostController');

//login
Auth::routes();

//categories
Route::resource('categories', 'CategoryController');

//tags
Route::resource('tags', 'TagController');

//Comments
Route::post('comment/{post_id}', ['uses' => 'CommentController@store', 'as' => 'comment.store']);