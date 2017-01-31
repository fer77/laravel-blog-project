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

//* This says "If you visit the home page, a view called 'welcome' will be loaded".  All views are located within resources->views
Route::get('/', function () {
    return view('welcome'); //* In our views this is 'welcome.blade.php' but Laravel does not require us to write '.blade.php' here.
});

//* Register a new Route:
Route::get('/about', function() {
	return view('about');
});