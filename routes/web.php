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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/givehope',
function(){
    return view('givehope');
});
Route::get('/contactus',
function(){
    return view('contactus ');
})->name('contactus');
Route::get('/donate',
function(){
    return view('donate');
})->name('donate');
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
Route::get('/teamarea/district/', 'DistrictController')->name('teamarea.district');
Route::get('/teamarea','HomeController@teamarea')->name('teamarea');
// Route::get('/gallery','HomeController@gallery')->name('gallery');
Route::get('/', 'HomeController@home')->name('home');
Route::get('/about',function(){
    return view('about');
})->name('about');
Route::resource('/blog','BlogController')->except('show');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');
Auth::routes();
Route::resource('/user','UserController')->only(['edit','destroy','update']);
Route::get('/user/{user}','UserController@show')->name('user.show');
Route::resource('/blog/{slug}/comment', 'CommentController')->only(['store','destroy']);
Route::get('/user/{user}/blogs/','UsersBlogController')->name('user.blogs');
Route::get('/adminPanel','AdminController@index')->name('adminPanel');
Route::post('/adminPanel/{user}/approve','AdminController@approve')->name('adminPanel.approve');
Route::post('/adminPanel/{user}/role','AdminController@role')->name('adminPanel.role');
Route::get('/images/{image}','DisplayImageController')->name('image.display');
Route::resource('/gallery', 'GalleryController')->only(['index','store','destroy']);
