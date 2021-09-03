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
    return view('home',[
        'comics' => $comics
    ]);
})->name('homepage');

// Route::get('/comics', function () {
//     return view('comics ');
// })->name('comicsDetail');

Route::get('/fumetto/{id}', function ($id) {

    // aggiorno l'id con un valore posizionale
    $arrayIndex = $id - 1;

    $comics = config('comics');

    return view('fumetto', [
        "arrayIndex" => $arrayIndex,
        'comics' => $comics
    ]);
})->name('fumetto');