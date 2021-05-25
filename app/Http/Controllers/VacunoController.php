<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacuno;

class VacunoController extends Controller{
    public function index(){
        $resquest  = Vacuno::paginate(20);
        return response()->json($resquest); 
    }
    public function show($id){
        $usuario = Vacuno::findOrFail($id);
        return response()->json($usuario);
    }
    public function create(Request $request){
        $res = new Vacuno();
        $res->codigo = $request->codigo;
        $res->fecha_nacimiento = $request->fecha_nacimiento;
        $res->peso = $request->peso;
        $res->n_partos = 0;
        $res->sexo = $request->sexo;
        $res->raza_id = $request->raza_id;
        $res->finca_id = $request->finca_id;
        $res->grupo_sanguineo_id = $request->grupo_sanguineo_id;
        $res->save();
    }
    public function update($id,Request $request){
        $res = Vacuno::findOrFail($id);
        $res->codigo = $request->codigo;
        $res->fecha_nacimiento = $request->fecha_nacimiento;
        $res->peso = $request->peso;
        $res->n_partos = $request->n_partos;
        $res->sexo = $request->sexo;
        $res->raza_id = $request->raza_id;
        $res->finca_id = $request->finca_id;
        $res->grupo_sanguineo_id = $request->grupo_sanguineo_id;
        $res->save();
    }
    public function delete($id){
        $usuario = Vacuno::findOrFail($id);
        $res->delete();
    }
}
