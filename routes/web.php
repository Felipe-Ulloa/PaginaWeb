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
// al momento de acceder a la ruta raiz haya una redireccion






Auth::routes();

Route::get('/admin', 'Web\PageController@admin')->name('admin');
Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('/', 'Web\PageController@home')->name('home');
Route::get('/blogsingle', 'Web\BlogSingleController@blogsingle')->name('blogsingle');

Route::get('/post/{slug}', 'Web\BlogSingleController@post')->name('post');
Route::get('/category/{slug}', 'Web\BlogSingleController@category')->name('category');
Route::get('/tag/{slug}', 'Web\BlogSingleController@tag')->name('tag');

Route::get('/post/{slug}', 'Web\PageController@post')->name('post');
Route::get('/category/{slug}', 'Web\PageController@category')->name('category');
Route::get('/tag/{slug}', 'Web\PageController@tag')->name('tag');

Route::resource('tags', 		'Admin\TagController');
Route::resource('blogs', 		'Admin\BlogController');
Route::resource('teams', 'Admin\TeamController');
Route::resource('services', 'Admin\ServiceController');
Route::resource('visions', 'Admin\VisionController');
Route::resource('contacts', 'Admin\ContactController');
Route::resource('mails', 		'MailController');
Route::resource('categories', 	'Admin\CategoryController');
Route::resource('posts', 		'Admin\PostController');
