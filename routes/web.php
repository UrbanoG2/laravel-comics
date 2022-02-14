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

    $data = ['comics' => config('comics'), "page_name" => "DC Comics | Home"];
    
    return view('home', $data);
    
});

Route::get('/characters', function () {
    return view('characters');
});


Route::get('/movies', function () {
    return view('movies');
});

Route::get('/tv', function () {
    return view('tv');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('comic/{id}', function ($id) {
    $collection = collect(config('comics'));
    $comics = $collection->where('id', $id);

    $singleComic = '';
    foreach ($comics as $value) {
        $singleComic = $value;
    }

    return view('comic', [
        'comic' => $singleComic,
    ]);
})->name('comic');


