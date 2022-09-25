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
    return view('welcome');
});

////basic routes

Route::get('/about', function() {
    // return 'whatever';
    return 9*9;
});

////end of basic routes

////view routes

// Route::get('/contact', function() {
//     return view('contact');
// });
Route::get('/contact', function() {
    return view('contact', ['name' => 'isak', 'phone' => '0812...']);
});

//simple way
//Route::view('/contact', 'contact');
//Route::view('/contact', 'contact', ['name' => 'isak', 'phone' => '0812...']);

////end of view routes

////redirect routes

////end of redirect routes
Route::redirect('/contact', '/contact-us');
