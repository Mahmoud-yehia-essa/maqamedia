<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\News;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Question;
use App\Models\Companywork;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function showDashboard()
    {


    $users = User::where('role', '!=', 'admin')->latest()->get();

    $category = Category::latest()->get();

    $games = Game::latest()->get();

    $questions = Question::latest()->get();


                $service = Service::latest()->get();
                $companywork = Companywork::latest()->get();

                 $news = News::latest()->get();



    return view('admin.index',compact('users','service','companywork','news'));

        // return view('admin.index');
    }
}
