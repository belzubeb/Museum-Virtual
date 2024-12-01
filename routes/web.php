<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;



Route::get('/About', function (){
    return view('About.index');
});

Route::get('/News', function (){
    return view('News.index');
});

Route::get('/Newsshow', function (){
    return view ('News.show');
});

Route::get('/Galleries', [GalleryController::class, 'index']);

Route::get('/Galleries/{gallery}', [GalleryController::class, 'show']);

Route::get('/', [HomeController::class, 'index']);


Route::get('/Aboutshow', function (){
    return view ('About.show');
});

Route::get('/sendnews', function (){
    return view ('News.send');
});