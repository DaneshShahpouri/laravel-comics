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
    $comics = config('comics');
    $navLinks  = [
        'character',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'video',
        'fans',
        'news',
        'shop'
    ];

    return view('home', compact('comics', 'navLinks'));
})->name('home');

// character
Route::get('/character', function () {

    return 'hello';
})->name('character');

// comics
Route::get('/comics', function () {

    return 'hello';
})->name('comics');


// movies
Route::get('/movies', function () {

    return 'hello';
})->name('movies');


// tv
Route::get('/tv', function () {

    return 'hello';
})->name('tv');

// games
Route::get('/games', function () {

    return 'hello';
})->name('games');

// collectibles
Route::get('/collectibles', function () {

    return 'hello';
})->name('collectibles');

// video
Route::get('/video', function () {

    return 'hello';
})->name('video');

// fans
Route::get('/fans', function () {

    return 'hello';
})->name('fans');

// news
Route::get('/news', function () {

    return 'hello';
})->name('news');

// shop
Route::get('/shop', function () {

    return 'hello';
})->name('shop');
