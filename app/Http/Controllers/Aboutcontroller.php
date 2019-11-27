<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aboutcontroller extends Controller
{
    public function addabout(){
        return view('cd-admin.about.aboutform');
    }
}
