<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jugador;

class indexController extends Controller
{
    public function index()
    {
        return view('portada');
    }
    public function historia()
    {
        return view('historia');
    }
    public function jugadores()
    {
        // $flights = App\Flight::where('active', 1)
        //        ->orderBy('name', 'desc')
        //        ->take(10)
        //        ->get();

        //   $jugadores = Jugador::all();
        $jugadores = Jugador::where('Nombre_equipo', 'Lakers')->get();
        return view('jugadores', compact('jugadores'));
    }
}
