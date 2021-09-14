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

Route::get('/', function () {
    return view('home');
});
Route::get('/header', function () {
    return view('header');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

// Route::get('/home', function () {
//     return view('header');
// });
// // Route::get('/', 'HomeController@index')->name('home');
// Route::get('/about-us', 'AboutUsController@index')->name('about-us');
// Route::get('/service', 'ServiceController@index')->name('service');
// Route::get('/service-detail/{id}', 'ServiceController@detail')->name('service-detail');
// Route::get('/artikel', 'ArtikelController@index')->name('artikel');
// Route::get('/artikel-detail/{id}', 'ArtikelController@detail')->name('artikel-detail');
// Route::get('/contact-us', 'ContactUsController@index')->name('contact-us');
// Route::post('/contact-us/create', 'ContactUsController@create')->name('inbox-create');