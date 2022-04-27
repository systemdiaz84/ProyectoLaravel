<?php

use App\Http\Controllers\ArbolController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('get_hola',function(){
    return '<h1>Hola Mundo - GET</h1>';
});

Route::post('post_hola',function(){
    return '<h1>Hola Mundo - POST</h1>';
});

Route::put('put_hola',function(){
    return '<h1>Hola Mundo - PUT</h1>';
});*/

/*Route::match(['get','post','put'],'usuario',function(){
    return '<h1>Página de Usuarios</h1>';
});

Route::any('usuario',function(){
    return '<h1>Página de Usuarios</h1>';
});

Route::get('usuario/{nombre?}/{edad?}',function($nombre='No especificado',$edad=0){
    return view('usuario',array(
                'nombre'=>$nombre,'edad'=>$edad
    ));
})->where(['nombre'=>'[A-Za-z]+','dni'=>'[0-9]+']);*/

/*Route::get('usuario/{nombre?}/{edad?}/{numero?}',function($nombre='No especificado',$edad=null,$numero=null){
    
    return view('usuario.usuario')->with('nombre',$nombre)->with('edad',$edad)->with('numero',$numero)
                          ->with('hobbies',array('Fútbol','Películas','Videojuegos','Viajes','Animes'));

})->where(['nombre'=>'[A-Za-z]+','dni'=>'[0-9]+']);*/



/*Route::get('index/{param?}',[ArbolController::class,'index'])->name('arbol.index');
Route::get('create/{param?}',[ArbolController::class,'create'])->name('arbol.create');
Route::get('show/{param?}',[ArbolController::class,'show'])->name('arbol.show');

Route::post('arbol',[ArbolController::class,'store'])->name('arbol.store');
Route::get('arbol/{id}',[ArbolController::class,'edit'])->name('arbol.edit');
Route::put('arbol/{id}',[ArbolController::class,'update'])->name('arbol.update');

Route::delete('arbol/{id}',[ArbolController::class,'destroy'])->name('arbol.destroy');*/

Route::resource('arbol',ArbolController::class);