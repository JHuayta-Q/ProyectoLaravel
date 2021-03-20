<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materias;

class MateriasController extends Controller
{
    public function index(){
        $materias = Materias::all();
        return view('materias')->with('materias', $materias);
    }
}
