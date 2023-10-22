<?php

namespace App\Http\Controllers;

use App\Models\Vue;

class VueController extends Controller
{
    public function index()
    {
        $aulas = Vue::all();
        return view("VueViews/vuehome")->with('aulas', $aulas);
    }

    public function show($id)
    {
        $aula = Vue::findOrFail($id);
        return view("VueViews/aula")->with('aula', $aula);
    }
}
