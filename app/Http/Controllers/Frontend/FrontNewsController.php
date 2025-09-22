<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Home;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontNewsController extends Controller
{

    public function showNews()
    {
        $home = Home::latest()->get();
        $news = News::latest()->get();
        return view('frontend.pages.news',compact('home','news'));
    }



     public function showNewsDetails($id)
    {
        $home = Home::latest()->get();
                $news = News::find($id);

        return view('frontend.pages.news_single',compact('home','news'));
    }




}
