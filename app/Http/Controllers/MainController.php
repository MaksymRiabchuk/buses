<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index()
    {
        $mainPage = MainPage::first();
        return view('index', ['mainPage' => $mainPage]);
    }

    public function aboutUs()
    {
        return view('about_us');
    }

    public function team()
    {
        return view('team');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function landing()
    {
        return view('landing');
    }
}
