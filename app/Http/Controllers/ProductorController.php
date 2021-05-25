<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Productor;
use Illuminate\Http\Request;

class ProductorController extends Controller{
    public function __construct(){
        $this->middleware('auth:api', ['except' => ['login']]);
    }
    public function login(Request $request){   
        $credentials = request(['celular', 'password']);
        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Autorización',
                'message' => 'El res o la contraseña estan erroneos.'], 401);
        }
        
        if(auth()->user()->estado == 0 || auth()->user()->estado == false){
            return response()->json(['error' => 'Autorización',
            'message' => 'El Usuario no esta autorizado en usar este sistema.'], 401);
        }
        return $this->respondWithToken($token);
    }
    public function cambiarContra(Request $request){
        if(auth()->user()->celular !== request('celular')){
            return response()->json(['error' => 'Autorización',
            'message' => 'Usted no es propietario de esta cuenta.'], 401);
        }
        $credentials = request(['celular','password']);
        if(auth()->user()->estado == 0 || auth()->user()->estado == false){
            return response()->json([
                'error' => 'Autorización',
                'message' => 'El Usuario no esta autorizado para usar este sistema.'], 401);
        }
        if($token = auth()->attempt($credentials)){
            if($request->password_new == $request->password_confirmation){
                $user = User::where('dni',auth()->user()->dni)->first();
                $user->update(['password'=>$request->password_new]);
                return response()->json([
                    'data'=>'Ok',
                    'message' => 'La contraseña fue cambiada exitosamente.'],200);
            }
            return response()->json([
                'error' => 'Autorización',
                'message'=>'La contraseñas no coinciden.'],401);
        }
        return response()->json([
            'error' => 'Autorización',
            'message'=>'El Usuario o la contraseña estan erroneos.'],401);
    }
    public function me(){
        return response()->json(auth()->user());
    }
    public function roles(){
       /* $roles_user =RolsUsers::where('user_id',auth()->user()->id)
        ->join('rols','rols.id','rols_users.rol_id')
        ->select('rols_users.id','rols.rol as nombre','rols_users.rol_id')->get();
        return response()->json($roles_user);*/
    }
    public function logout(){
        auth()->logout();

        return response()->json([ 'data'=>'Ok',
        'message' => 'Se cerro sesión correctamente.'],200);
    }
    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth()->factory()->getTTL()." minutos",
            'user' => auth()->user()->id,
            'email' => auth()->user()->email
        ],200);
    }
    protected function jsonResponse($data, $code = 200){
     return response()->json($data, $code,
     ['Content-Type' => 'application/json;charset=UTF8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }
    public function index(){
        $resquest  = Productor::paginate(20);
        return response()->json($resquest); 
    }
    public function show($id){
        $usuario = Productor::findOrFail($id);
        return response()->json($usuario);
    }
    public function create(Request $request){
        $res = new Productor();
        $res->nombres = $request->nombres;
        $res->apellido_paterno = $request->apellido_paterno;
        $res->apellido_materno = $request->apellido_materno;
        $res->email = $request->email;
        $res->dni = $request->dni;
        $res->fecha_nacimiento = $request->fecha_nacimiento;
        $res->fecha_inscripcion = $request->fecha_inscripcion;
        $res->sexo = $request->sexo;
        $res->direccion = $request->direccion;
        $res->celular = $request->celular;
        $res->finca_id = $request->finca_id;
        $res->password = $request->password;
        $res->estado = $request->estado;
        $res->save();
    }
    public function update($id,Request $request){
        $res = Productor::findOrFail($id);
        $res->nombres = $request->nombres;
        $res->apellido_paterno = $request->apellido_paterno;
        $res->apellido_materno = $request->apellido_materno;
        $res->email = $request->email;
        $res->dni = $request->dni;
        $res->fecha_nacimiento = $request->fecha_nacimiento;
        $res->fecha_inscripcion = $request->fecha_inscripcion;
        $res->sexo = $request->sexo;
        $res->direccion = $request->direccion;
        $res->celular = $request->celular;
        $res->finca_id = $request->finca_id;
        $res->password = $request->password;
        $res->estado = $request->estado;
        $res->save();
    }
}
