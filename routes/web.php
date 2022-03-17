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



/*
  Unauthenticated Pages
*/

Route::get('/', function() {
    return view('home');
});

Route::get('/sign-up', function() {
  return view('sign-up');
});

Route::get('/login', function() {
  return view('login');
});

Route::get('/news', function() {
  return view('news');
});

Route::get('/how-it-works', function() {
  return view('how-it-works');
});


/*
  Authenticated Pages
*/

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/leaderboard', function() {
    return view('leaderboard');
});

Route::get('/resources', function() {
    return view('resources');
});

Route::get('/profile', function() {
    return view('profile');
});
