<?php

use App\Http\Controllers\VueController;
use App\Http\Controllers\LaravelController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("Home");
});
Route::get("/aulasvue", [VueController::class, "index"])->name("aulasvue.index");
Route::get("/aulasvue/{id}", [VueController::class, "show"])->name("aulasvue.show");
Route::delete("/aulasvue/{id}", [VueController::class, "destroy"])->name("aulasvue.destroy");
Route::get("/aulaslaravel", [LaravelController::class, "index"])->name("aulaslaravel.index");
Route::get("/aulaslaravel/{id}", [LaravelController::class, "show"])->name("aulaslaravel.show");
