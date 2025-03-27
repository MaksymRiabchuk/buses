<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\MainPage;
use App\Models\Slider;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index()
    {
        $mainPage = MainPage::first()->toArray();
        $mainPage['sliders'] = Slider::all()->toArray();
        $mainPage['employees'] = Employee::all()->toArray();
        $mainPage['gallery'] = Gallery::all()->toArray();
        $mainPage['faqs'] = Faq::all()->toArray();
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
