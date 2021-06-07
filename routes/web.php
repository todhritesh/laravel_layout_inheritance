<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContentController;

Route:: get("/",[ContentController::class,"homepage"]);
Route:: get("/monitor",[ContentController::class,"monitor"]);
Route:: get("/motherboard",[ContentController::class,"motherboard"]);
Route:: get("/processor",[ContentController::class,"processor"]);
Route:: get("/contact",[ContentController::class,"contact"]);
Route:: get("/about",[ContentController::class,"about"]);
