<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlmacenTipos;

class AlmacenTipoController extends Controller{
    public function index(){
        $resquest  = AlmacenTipos::all();
        return response()->json($resquest); 
    }
    public function show($id){
        $usuario = AlmacenTipos::findOrFail($id);
        return response()->json($usuario);
    }
    public function create(Request $request){
        $res = new AlmacenTipos();
        $res->tipo = $request->tipo;
        $res->save();
    }
    public function update($id,Request $request){
        $res = AlmacenTipos::findOrFail($id);
        $res->tipo = $request->tipo;
        $res->save();
    }
    public function delete($id){
        $usuario = AlmacenTipos::findOrFail($id);
        $res->delete();
    }
}
