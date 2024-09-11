<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }

    public function about()
    {
        return view('website.who_we_are');
    }
    public function vision()
    {
        return view('website.vision_mission');
    }
    public function ceo()
    {
        return view('website.ceo_message');
    }

    public function quality()
    {
        return view('website.quality_policy');
    }

    public function certificate()
    {
        return view('website.certificate');
    }

    public function gallery()
    {
        return view('website.gallery');
    }
    public function contact()
    {
        return view('website.contact');
    }

    public function testimonials()
    {
        return view('website.testimonials');
    }
    public function engineering()
    {
        return view('website.engineering');
    }

    public function stamping()
    {
        return view('website.stamping');
    }

    public function welding()
    {
        return view('website.welding');
    }
    public function precision()
    {
        return view('website.precision_maching');
    }
    public function quality_assurance()
    {
        return view('website.quality_assurance');
    }
}
