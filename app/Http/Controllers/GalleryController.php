<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all(); 
    return view('Gallery.index', compact('galleries')); 
    }

    public function show(Gallery $gallery)
    {
        return view('Gallery.show', [
            'gallery' => $gallery
        ]);
    }
}
