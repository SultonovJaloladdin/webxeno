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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
})->name('index');

    // Route::get('alert/succes', function () {
    //     return view('alert.succes');
    // })->name('alert.succes');

Route::get('/article', 'HomeController@index')->name('article');

Route::get('article/{id}', 'HomeController@readMore');

Route::post('/contact', 'HomeController@contact');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();  
});
