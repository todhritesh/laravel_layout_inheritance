<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class StudentController extends Controller
{
    public function stud(){
        for($x=1;$x<=5;$x++):
        $details = new student();

        $details->name = "Manish";
        $details->course = "Bca";
        $details->gender = "Male";

        $details->save();
        echo "success";
        endfor;
    }

    public function showForm(){
        $data = student::all();
        return view('studentform',['details'=>$data]);
    }


    public function submitForm(Request $req){

        $req->validate([
            'name'=>'required | min:1 | alpha',
            'course'=>'required',
            'gender' =>'required'
        ]);

        $name = $req->name;
        $gender = $req->gender;
        $course = $req->input('course');


        $submit = new student();
        $submit->name = $name;
        $submit->gender = $gender;
        $submit->course = $course;

        $submit->save();

        return redirect()->route('submitform');
    }
}
