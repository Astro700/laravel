<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blue extends Controller
{
    public function home(){
        return view("blue.home");
    }

    public function aboutus(){
        return view("blue.aboutus");
    }

    public function menu(){
        return view("blue.menu");
    }
    
    public function reservation(){
        return view("blue.reservation");
    }

    public function contact(){
        return view("blue.contact");
    }
}
