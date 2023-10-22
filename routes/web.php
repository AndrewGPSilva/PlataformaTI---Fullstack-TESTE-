<?php

use App\Http\Controllers\VueController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("Home");
});
Route::get("/aulasvue", [VueController::class, "index"])->name("aulasvue.index");
Route::get("/aulasvue/{id}", [VueController::class, "show"])->name("aulasvue.show");
