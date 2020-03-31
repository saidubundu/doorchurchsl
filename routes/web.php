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

Route::resource('/', 'FrontendController');
Route::resource('/event', 'EventController');
Route::resource('/sermon', 'SermonController');
Route::resource('/post', 'PostController');
Route::resource('/gallery', 'GalleryController');
Route::resource('/pastor', 'PastorController');

Auth::routes();

Route::get('backend/home', 'Backend\HomeController@index')->name('home');
Route::resource('backend/sermons', 'Backend\SermonsController');
Route::put('backend/sermons/restore/{sermon}',[
    'uses' => 'Backend\SermonsController@restore',
    'as' => 'sermons.restore'
]);
Route::delete('/backend/sermons/force-destroy/{sermons}',[
    'uses' => 'Backend\SermonsController@forceDestroy',
    'as' => 'sermons.force-destroy'
]);

