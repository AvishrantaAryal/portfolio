<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about()
    {
    return view('pages.about');
    }

    public function skill()
    {
        return view('pages.skills');
    }
    public function portfolio(){
        return view('pages.portfolio');
    }
    public function blogs(){
        return view('pages.blogs');
    }
    public function contact(){
        return view('pages.contact');
    }
}
