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
    $data = [
        'nav_links' => [
           'characters',
           'comics',
           'movies',
           'tv',
           'games',
           'collectibles',
           'video',
           'fans',
           'news',
           'shop'
        ],
        'comics' => config('db.comics')
    ];
    // dd(config('db.comics'));
    return view('home', $data);
})->name('home');
