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

Route::get('/NewsOnClick', function (){
    return view ('News.onClick');
});

Route::get('/Gallery', [GalleryController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/GalleryOnclick', function (){
    return view ('Gallery.onClick');
});

Route::get('/AboutOnclick', function (){
    return view ('About.onClick');
});