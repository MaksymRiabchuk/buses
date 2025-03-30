<?php

namespace App\Http\Controllers;

use App\Http\Requests\WriteMessageRequest;
use App\Models\AboutUsPage;
use App\Models\Employee;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\MainPage;
use App\Models\Message;
use App\Models\OurTeam;
use App\Models\Param;
use App\Models\Review;
use App\Models\Slider;

class MainController extends Controller
{
    public function index()
    {
        $mainPage = MainPage::first()->toArray();
        $mainPage['sliders'] = Slider::all()->toArray();
        $mainPage['employees'] = Employee::all()->toArray();
        $mainPage['gallery'] = Gallery::all()->toArray();
        $mainPage['faqs'] = Faq::all()->toArray();
        if (Param::where('name', 'feedback_email')->exists()) {
            $feedback_email = Param::where('name', 'feedback_email')->first()->value;
        }
        if (Param::where('name', 'feedback_phone')->exists()) {
            $feedback_phone = Param::where('name', 'feedback_phone')->first()->value;
        }
        if (Param::where('name', 'location')->exists()) {
            $location = Param::where('name', 'location')->first()->value;
        }

        return view('index', [
            'mainPage' => $mainPage,
            'feedback_email' => $feedback_email ?? null,
            'feedback_phone' => $feedback_phone ?? null,
            'location' => $location ?? null,
        ]);
    }

    public function aboutUs()
    {
        $aboutUs = AboutUsPage::first()->toArray();
        $aboutUs['employees'] = Employee::all()->toArray();
        $aboutUs['reviews'] = Review::all()->toArray();
        return view('about_us', ['aboutUs' => $aboutUs]);
    }

    public function team()
    {
        $ourTeam = OurTeam::first()->toArray();
        $ourTeam['employees'] = Employee::all()->toArray();
        return view('team', ['ourTeam' => $ourTeam]);
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function landing()
    {
        return view('landing');
    }

    public function writeMessage(WriteMessageRequest $request)
    {
        $data = $request->validated();
        $message = new Message();
        $message->fill($data);
        $message->save();
        return response()->json(['success' => true]);
    }
}
