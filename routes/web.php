<?php

use Illuminate\Support\Facades\Route;

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
    $data =
    [
        'headerLinks' => config('db.headerLinks'),
        'dcComics' => config('db.dcComics'),
        'shop' => config('db.shop'),
        'dc' => config('db.dc'),
        'sites' => config('db.sites'),
        'comics' => config('db.comics')
    ];
    return view('home', $data);
})->name('home');

Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    if ($id >= 0 && count($comics)) {
        $comic = $comics[$id];
        return view('comics.show', compact('comics'));
    }
})->name('show');


