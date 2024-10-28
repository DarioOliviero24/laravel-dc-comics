<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\ComicController;

Route::get('/', function () {
    
    $firstName = 'Gino';
    $lastName = 'Paoli';

   

    return view('welcome', [
        'firstName' => $firstName,
        'lastName' => $lastName,
    ]);
   
});

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

Route::resource('comics', ComicController::class);
