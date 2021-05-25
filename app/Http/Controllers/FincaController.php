<?php

namespace App\Http\Controllers;
use App\Models\Finca;

use Illuminate\Http\Request;

class FincaController extends Controller{
    public function index(){
        $resquest  = Finca::paginate(20);
        return response()->json($resquest); 
    }
    public function show($id){
        $usuario = Finca::findOrFail($id);
        return response()->json($usuario);
    }
    public function create(Request $request){
        $res = new Finca();
        $res->codigo = $request->codigo;
        $res->nombre = $request->nombre;
        $res->ubicacion = $request->ubicacion;
        $res->save();
    }
    public function update($id,Request $request){
        $res = Finca::findOrFail($id);
        $res->codigo = $request->codigo;
        $res->nombre = $request->nombre;
        $res->ubicacion = $request->ubicacion;
        $res->save();
    }
    public function delete($id){
        $usuario = Finca::findOrFail($id);
        $res->delete();
    }
}
