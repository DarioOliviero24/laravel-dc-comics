<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\ComicController;

Route::get('/', function () {

    return redirect()->route('comics.index');
});

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

Route::resource('comics', ComicController::class);
