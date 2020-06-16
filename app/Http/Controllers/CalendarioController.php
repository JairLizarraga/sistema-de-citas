<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calendario as Calendario;

class CalendarioController extends Controller
{
    public function index(){
        return view('calendario.index');
    }

    public function store(Request $request){
        $datosCita = request()->except('_token');
        $calendario = new Calendario;
        $calendario->calendario_fecha = "2020-06-15 21:57:57.000000";
        $calendario->save();
        return response()->json($calendario);
    }
}
