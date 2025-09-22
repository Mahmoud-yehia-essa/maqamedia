<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Home;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontGalleryController extends Controller
{
  public function showGallery()
    {
        $home = Home::latest()->get();
        $galleries = Gallery::latest()->get();
        return view('frontend.pages.gallery',compact('home','galleries'));
    }


    public function galleryDetails($id)
{
    $gallery = Gallery::with('photos')->findOrFail($id);
            $home = Home::latest()->get();

    return view('frontend.pages.gallery_details', compact('gallery','home'));
}

}
