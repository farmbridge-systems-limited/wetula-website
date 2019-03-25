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

    public function getSectorPage(){
        return view('sector');
    }

    public function getProductPage()
    {
        return view('product');
    }

    public function getContactPage()
    {
        return view('contact');
    }

    public function getFarmersSegmentPage()
    {
        return view('customer-segments.farmers');
    }


}
