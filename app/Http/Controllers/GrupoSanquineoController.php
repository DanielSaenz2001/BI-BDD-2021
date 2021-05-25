<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GruposSanguineos;

class GrupoSanquineoController extends Controller{
    public function index(){
        $resquest  = GruposSanguineos::all();
        return response()->json($resquest); 
    }
    public function show($id){
        $usuario = GruposSanguineos::findOrFail($id);
        return response()->json($usuario);
    }
    public function create(Request $request){
        $res = new GruposSanguineos();
        $res->grupo = $request->grupo;
        $res->save();
    }
    public function update($id,Request $request){
        $res = GruposSanguineos::findOrFail($id);
        $res->grupo = $request->grupo;
        $res->save();
    }
    public function delete($id){
        $usuario = GruposSanguineos::findOrFail($id);
        $res->delete();
    }
}
