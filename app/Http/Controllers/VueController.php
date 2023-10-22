<?php

namespace App\Http\Controllers;

use App\Models\Vue;

class VueController extends Controller
{
    public function index()
    {
        $aulas = Vue::all();
        return view("vuehome")->with('aulas', $aulas);
    }
}