<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function getHomepage(){
        return view('home');
    }

    public function getAboutPage()
    {
        return view('about');
    }
}
