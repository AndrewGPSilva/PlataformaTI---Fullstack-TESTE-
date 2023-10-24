<?php

namespace App\Http\Controllers;

use App\Models\Vue;
use Illuminate\View\View;

class VueController extends Controller
{
    public function index(): View
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
