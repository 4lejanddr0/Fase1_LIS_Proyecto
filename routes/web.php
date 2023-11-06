<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use app\Models\usuario;
use app\Models\User; //probar si funciona


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*registro de empresa*/
Route::get('empresa',[ProyectoController::class,'empresa']);
Route::POST('empresa',[ProyectoController::class,'verificar']);

/*registro de cliente*/
Route::get('cliente',[ProyectoController::class,'cliente']);
Route::POST('cliente',[ProyectoController::class,'verificarcliente']);
/*registro de cliente*/

Route::get('/',[ProyectoController::class,'principal']);
Route::get('login',[ProyectoController::class,'login']);
Route::POST('login',[ProyectoController::class,'verificarlogin']);
Route::get('seleccion',[ProyectoController::class,'seleccion']);
Route::get('nosotros',[ProyectoController::class,'nosotros']);
Route::get('aprobacion',[ProyectoController::class,'aprobacion']);
Route::get('nologin',[ProyectoController::class,'nologin']);


