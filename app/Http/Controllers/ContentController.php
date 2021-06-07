<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function homepage(){
        return view('home');
    }


    public function motherboard(){
        return view('motherboard');
    }

    public function processor(){
        return view('processor');
    }

    public function monitor(){
        return view('monitor');
    }


    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }




}
