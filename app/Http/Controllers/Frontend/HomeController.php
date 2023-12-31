<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function classes()
    {
        return view('frontend.pages.classes');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
