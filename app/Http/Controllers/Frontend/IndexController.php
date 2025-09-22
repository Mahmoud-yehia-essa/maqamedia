<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Home;
use App\Models\News;
use App\Models\Planne;
use App\Models\Service;
use App\Models\TeamWork;
use App\Models\Companywork;
use App\Models\MainCounter;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Models\CompanyClient;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function showHome()
    {

        $home = Home::latest()->get();

        // $companywork = Companywork::latest()->get();


                $companywork = Companywork::latest()->limit(4)->get();


        $mainCounter = MainCounter::latest()->get();

        // $service = Service::latest()->get();

        $service = Service::latest()->limit(6)->get();



        $planne = Planne::latest()->limit(3)->get();



        $teamWork = TeamWork::latest()->limit(4)->get();


        $companyClient = CompanyClient::latest()->get();

                $news = News::latest()->limit(3)->get();


                        // $socialMedia = SocialMedia::latest()->get();




         return view('frontend.index',compact('home','companywork','mainCounter','service','planne','teamWork','companyClient','news'));


    }


    public function showSoon()
    {

        return view('frontend.soon');
    }


}
