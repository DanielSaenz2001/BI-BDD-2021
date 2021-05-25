<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periodo;

class PeriodoController extends Controller{
    
    public function index(){
        $resquest  = Periodo::paginate(20);
        return response()->json($resquest); 
    }
    public function show($id){
        $usuario = Periodo::findOrFail($id);
        return response()->json($usuario);
    }
    public function create(Request $request){
        $res = new Periodo();
        $res->codigo = $request->codigo;
        $res->fecha_inicio = $request->fecha_inicio;
        $res->fecha_fin = $request->fecha_fin;
        $res->activo = $request->activo;
        $res->save();
    }
    public function update($id,Request $request){
        $res = Periodo::findOrFail($id);
        $res->codigo = $request->codigo;
        $res->fecha_inicio = $request->fecha_inicio;
        $res->fecha_fin = $request->fecha_fin;
        $res->activo = $request->activo;
        $res->save();
    }
    public function delete($id){
        $usuario = Periodo::findOrFail($id);
        $res->delete();
    }
}
