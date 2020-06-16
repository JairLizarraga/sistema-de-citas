<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita as Cita;
use App\ModuloAtencion as ModuloAtencion;
use App\Tramite as Tramite;
use App\Calendario as Calendario;
use DB;

class CitaController extends Controller
{
    public function index(){
        $datos['modulos'] = ModuloAtencion::all();
        #$datos['modulos_list'] = DB::select('select modulo_id, modulo_nombre from modulo_atencion', [1]);
        
        $datos['tramites'] = Tramite::all();
        $datos['fechas_calendario'] = Calendario::all();


        return view('cita.index', $datos);
    }

    public function store(Request $request){
        
        $datosCita = request()->except('_token');
        #Cita::insert($datosCita);
        
        return response()->json($datosCita);
    }

    public function destroy($id){
        Calendario::where('calendario_id', '=', $id)->delete();
        return redirect('cita');

    }
}
