<?php

namespace App\Http\Controllers;

use App\Models\Laravel;
use Illuminate\View\View;

class LaravelController extends Controller
{
    public function index(): View
    {
        $aulas = Laravel::all();
        return view("LaravelViews/laravelhome")->with('aulas', $aulas);
    }

    public function show($id)
    {
        $aula = Laravel::findOrFail($id);
        return view("LaravelViews/aula")->with('aula', $aula);
    }
}
