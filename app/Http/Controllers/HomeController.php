<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\About;
use App\Models\Color;
use App\Models\HeaderAndFooter;
use App\Models\Service;
use App\Models\WhatWeDo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userDashboard()
    {
        $users = User::count();
        $services = Service::count();
        $sliders = Slider::count();
        $colors = Color::count();
        return view('user.dashboard', compact('users', 'sliders', 'services', 'colors'));
    }
    public function welcome()
    {
        $slider_categories = Slider::select('slider_category')->distinct()->get();

        foreach ($slider_categories as $slider_category) {
            $slider_category->slider = Slider::where('slider_category', $slider_category->slider_category)->first();
            $slider_category->slider->titles = json_decode($slider_category->slider->title);
        }
        // $about = About::first();
        // $services = Service::all();
        // $headerAndFooter = HeaderAndFooter::first();
        // $colors = Color::all();
        // $whatWeDos = WhatWeDo::all();

        // if (!$about) {
        //     $about = new About();
        //     $about->description = 'No description';
        //     $about->image = 'images/no-image.jpg';
        //     $about->save();
        // }
        // dd($slider_categories);

        return view('home.index', compact('slider_categories'));
    }


    public function testApi()
    {
        dd('test');
        // username and password

    }
}
