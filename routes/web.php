<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home.index');
});

Route::get('/Gallery', function () {
    return view('Gallery.index');
});

Route::get('/About', function (){
    return view('About.index');
});

Route::get('/News', function (){
    return view('News.index');
});

Route::get('/NewsOnClick', function (){
    return view ('News.onClick');
});