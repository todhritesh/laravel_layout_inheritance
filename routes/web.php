<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContentController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;

Route:: get("/",[ContentController::class,"homepage"]);
Route:: get("/monitor",[ContentController::class,"monitor"]);
Route:: get("/motherboard",[ContentController::class,"motherboard"]);
Route:: get("/processor",[ContentController::class,"processor"]);
Route:: get("/contact",[ContentController::class,"contact"]);
Route:: get("/about",[ContentController::class,"about"]);


//form validation
Route :: get("/signup",[FormController::class,"showForm"]);
Route :: post("/signup",[FormController::class,"formValidate"]);

//modals
route:: get("/student",[StudentController::class,'stud']);

//modal_form_routes
route::get('/student/form',[StudentController::class,"showForm"]);
route::post('/student/form',[StudentController::class,"submitForm"])->name('submitform');
