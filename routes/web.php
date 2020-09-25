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

use App\Http\Controllers\UserController;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use Illuminate\Support\Facades\Route;
//webpage route
Route::get('/', 'FrontendController@home')->name('index');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/category', 'FrontendController@category')->name('category');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/post/{slug}', 'FrontendController@allpost')->name('post');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//admin route
Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function(){

    Route::get('/dashboard', function(){
    return view('admin.dashboard.index');
    })->name('adminpanel');

    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController');
    Route::resource('post', 'PostController');
    Route::resource('user', 'UserController');

});