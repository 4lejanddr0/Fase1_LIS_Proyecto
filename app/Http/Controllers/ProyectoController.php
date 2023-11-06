<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\usuario;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

  public function empresa(){ return view('registro'); }
  public function inicio(){ return view('inicio'); }
  public function seleccion(){ return view('seleccion');}
  public function nosotros(){ return view('nosotros');}
  public function aprobacion(){ return view('aprobacion');}
  public function nologin(){ return view('nologin');}


  /*public function aprobacion(){ return view('aprobacion');} */ 
  public function login(){ return view('login');}



/*registro de cliente*/
  public function cliente(){ return view('usuario');}
  public function principal(){ return view('inicio');}


 public function verificarcliente(request $request){

$cliente = new usuario;
$cliente->roll = '2';
$cliente->autorizado = '0';
$cliente->email = $request->email;
$cliente->usuario = $request->usuario;
$cliente->password= $request->password;
$cliente->nombre =  $request->nombre;
$cliente->apellido =  $request->apellido;
$cliente->empresa = 'N/A';
$cliente->direccion = 'N/A';
$cliente->telefono ='N/A';
$cliente->dui = $request->dui;
$cliente->nit = 'N/A';
$cliente->fecha = $request->fecha;
$cliente->cliente = 'cliente';
$cliente->save();
         return redirect('/aprobacion');

   }    


/*registro de empresa*/
   public function verificar(request $request){


$registro = new usuario;
 $registro->roll = '3';
  $registro->autorizado = '0';
 $registro->email = $request->email;
 $registro->usuario = $request->usuario;
 $registro->password= $request->password;
 $registro->nombre = 'N/A';
 $registro->apellido = 'N/A';
 $registro->empresa = $request->empresa;
 $registro->direccion = $request->direccion;
 $registro->telefono = $request->telefono;
 $registro->dui = 'N/A';
 $registro->nit = $request->nit;
 $registro->fecha = 'N/A';
 $registro->cliente = 'empresa';


 $registro->save();

          return redirect('/aprobacion');


   }    


   /*LOGIN*/
   public function verificarlogin(request $request){

   $login =usuario::where('usuario',$request->usuario)->first();
     $login2 =usuario::where('password',$request->password)->first();
if($login and $login2 == null){
              return redirect('/nologin');

}
else
{
if(usuario::where('roll','1')->count() >0){

         echo 'Su roll es Admin';

}
elseif (usuario::where('roll','2')->count() >0){

         echo 'Su roll es cliente';

}   

elseif (usuario::where('roll','3')->count() >0){

         echo 'Su roll es empresa';

}


}

   }   


}
