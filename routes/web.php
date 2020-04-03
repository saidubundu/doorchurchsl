<?php

use Illuminate\Support\Facades\Route;

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

//Frontend all Controllers

Route::resource('/', 'FrontendController');
Route::resource('/event', 'EventController');
Route::resource('/sermon', 'SermonController');
Route::resource('/post', 'PostController');
Route::resource('/gallery', 'GalleryController');
Route::resource('/pastor', 'PastorController');

// // /// /// //// /// / / / / // / / /
Auth::routes();

Route::get('backend/home', 'Backend\HomeController@index')->name('home');

//Backend Sermon Controller

Route::resource('backend/sermons', 'Backend\SermonsController');

Route::put('backend/sermons/restore/{sermon}',[
    'uses' => 'Backend\SermonsController@restore',
    'as' => 'sermons.restore'
]);

Route::delete('/backend/sermons/force-destroy/{sermons}',[
    'uses' => 'Backend\SermonsController@forceDestroy',
    'as' => 'sermons.force-destroy'
]);

////////////////////////////////
///
///
///


// Backend Post Controller ///

Route::resource('backend/posts', 'Backend\PostsController');

Route::put('backend/posts/restore/{post}', [
    'uses' => 'Backend\PostsController@restore',
    'as'   => 'posts.restore'
]);

Route::delete('/backend/posts/force-delete/{post}', [
    'uses'  => 'Backend\PostsController@forceDestroy',
    'as'  => 'posts.force-destroy'
]);

/////////////////////////////////////////////////////
///
///

////////// Backend Event Controller
Route::resource('backend/events', 'Backend\EventsController');
