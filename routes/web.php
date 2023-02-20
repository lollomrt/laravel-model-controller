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
    return view('home', compact('comics'));
})->name('homepage');

Route::get('/detail_comic/{id}', function ($id) {
    $comics = config('comics');
    $single = '';
    foreach($comics as $key => $comic){
        if($key == $id){
            $single = $comic;
        }
    }
    // dd($single);
    return view('detail_comic', compact('single'));
})->name('single-comic');
