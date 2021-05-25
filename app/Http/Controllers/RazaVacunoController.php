<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RazaVacuno;

class RazaVacunoController extends Controller{
    public function index(){
        $resquest  = RazaVacuno::all();
        return response()->json($resquest); 
    }
    public function show($id){
        $usuario = RazaVacuno::findOrFail($id);
        return response()->json($usuario);
    }
    public function create(Request $request){
        $res = new RazaVacuno();
        $res->grupo = $request->grupo;
        $res->save();
    }
    public function update($id,Request $request){
        $res = RazaVacuno::findOrFail($id);
        $res->grupo = $request->grupo;
        $res->save();
    }
    public function delete($id){
        $usuario = RazaVacuno::findOrFail($id);
        $res->delete();
    }
}
