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

Route::get('/', function () {
    return view('index');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/ourteam', function () {
    return view('ourteam');
});
Route::get('/commercial', function () {
    return view('commercial');
});
Route::get('/residential', function () {
    return view('residential');
});
Route::get('/titlerequest', function () {
    return view('titlerequest');
});
Route::get('/calculator', function () {
    return view('calculator');
});
Route::get('/tools', function () {
    return view('tools');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::post('/contact/titleRequest', 'ContactController@titleRequest');
Route::post('/contact/contact', 'ContactController@contact');
