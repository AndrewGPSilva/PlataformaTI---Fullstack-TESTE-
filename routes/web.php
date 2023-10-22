<?php

use App\Http\Controllers\VueController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("Home");
});
Route::get("/aulasvue", [VueController::class, "index"])->name("aulasvue.index");
