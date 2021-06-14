<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formValidate(Request $req){
        $req->validate([
            'name'=>'required | min:1',
            'contact'=>'required | min:10 | max:10',
            'email'=>'required | email',
            'password'=>'required | min:8 | regex:/^.([\w]{3})([\d]{1,}).*([A-Za-z]+)(.*)$/',
        ]);
    }


    public function showForm(){
        return view('signup');
    }
}
