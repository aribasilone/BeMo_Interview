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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');

/* vue routes conflicting */
// Route::get('/{vue?}', function () {
//     return view('vue');
// })->where('vue', '[\/\w\.-]*');
// Route::get('/{vue_capture?}', function () {
//     return view('welcome');
// })->where('vue_capture', '[\/\w\.-]*');
