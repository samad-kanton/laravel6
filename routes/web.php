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
    return view('welcome');
});



// Signup Route
// Route::get('/signup', function () {
//     return view('signup');
// });

// // Login Route
// Route::get('/login', function () {
//     return view('login');
// });


Route::get('/signup', 'Signup@register');

Route::post('/signup/new', 'Signup@create');

Route::get('/login', 'Login@index');

