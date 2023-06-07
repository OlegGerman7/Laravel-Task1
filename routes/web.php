<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return 'Welcome to our website!';
});

Route::get('/welcome/{name?}', function ($name = null) {
    if(!empty($name)):
        return "Welcome, $name";
    else:
        return 'Welcome, guest';
    endif;
});

Route::get('/welcome/{name}/{age}', function ($name, $age) {
    return "Welcome, $name You are $age years old.";
})->whereNumber('age');

Route::get('/year/{year}', function ($year) {
    if($year == date('Y')):
        return 'Yes, this is the current year';
    else:
        return 'No, this is not the current year';
    endif;
});

Route::get('/age/{age}', function ($age) {
    return "You are $age years old.";
})->whereNumber('age');

Route::get('/find', function () {
    $q = request()->query('q');
    if(!empty($q)):
        return "You are searching for: $q";
    else:
        return 'Please enter a search query';
    endif;
});

Route::get('/page', function () {
    return response('<h1>This is a page</h1>', 200);
});

Route::get('/missing', function () {
    return response('<h1>This page is not found</h1>', 404);
});

Route::get('/public-page', function () {
    return response('<h1>Public Page</h1>', 200)->header('Cache-Control', 'no-cache, no-store, must-revalidate');
});

Route::resource('posts', PostController::class);