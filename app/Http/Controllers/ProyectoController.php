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

  public function login(){ return view('login');}
  
  public function seleccion(){ return view('seleccion');}
    public function nosotros(){ return view('nosotros');}
/*registro de cliente*/
  public function cliente(){ return view('usuario');}

    public function principal(){ return view('inicio');}


 public function verificarcliente(request $request){

$cliente = new usuario;
$cliente->roll = '0';
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
         return redirect('/login');

   }    


/*registro de empresa*/
   public function verificar(request $request){


$registro = new usuario;
 $registro->roll = '0';
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

          return redirect('/login');


   }    

}
