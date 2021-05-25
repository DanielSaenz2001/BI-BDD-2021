<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Almacen;

class AlmacenController extends Controller{
    public function index(){
        $resquest  = Almacen::all();
        return response()->json($resquest); 
    }
    public function show($id){
        $usuario = Almacen::findOrFail($id);
        return response()->json($usuario);
    }
    public function create(Request $request){
        $res = new Almacen();
        $res->finca_id = $request->finca_id;
        $res->encargado_id = $request->encargado_id;
        $res->encargado_id = $request->encargado_id;
        $res->save();
    }
    public function update($id,Request $request){
        $res = Almacen::findOrFail($id);
        $res->finca_id = $request->finca_id;
        $res->encargado_id = $request->encargado_id;
        $res->encargado_id = $request->encargado_id;
        $res->save();
    }
    public function delete($id){
        $usuario = Almacen::findOrFail($id);
        $res->delete();
    }
}
