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
        'banner_promo' => [
            [
                "title" => 'digital comics',
                "image" => '/img/buy-comics-digital-comics.png'
            ],
            [
                "title" => 'dc merchandise',
                "image" => '/img/buy-comics-merchandise.png'
            ],
            [
                "title" => 'subscription',
                "image" => '/img/buy-comics-subscriptions.png'
            ],
            [
                "title" => 'comic shop locator',
                "image" => '/img/buy-comics-shop-locator.png'
            ],
            [
                "title" => 'dc power visa',
                "image" => '/img/buy-dc-power-visa.png'
            ]
            ],
        'comics' => config('db.comics')
    ];
    // dd(config('db.comics'));
    return view('home', $data);
})->name('home');
