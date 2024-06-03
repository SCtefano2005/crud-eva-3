<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    public function index()
    {
         // Consulta para obtener la cantidad de personas registradas por mes de nacimiento
        $personasPorMes = DB::table('personas')
                        ->select(DB::raw('MONTH(fecha_nacimiento) as mes'), DB::raw('COUNT(*) as cantidad'))
                        ->groupBy(DB::raw('MONTH(fecha_nacimiento)'))
                        ->get();

        // Pasar los datos a la vista
    return view('personas.grafico', compact('personasPorMes'));
    }
}
