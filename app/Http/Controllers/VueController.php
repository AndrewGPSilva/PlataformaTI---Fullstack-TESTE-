<?php

namespace App\Http\Controllers;

use App\Models\Vue;
use Illuminate\View\View;

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

    public function destroy($id)
{
    $aula = Vue::find($id);

    if (!$aula) {
        return response()->json(['message' => 'Aula não encontrada'], 404);
    }

    $aula->delete();

    return response()->json(['message' => 'Aula excluída com sucesso']);
}
}
