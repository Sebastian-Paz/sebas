<?php
use App\Http\Controllers\CursosController;
use App\Http\Controllers\TruckTruckerController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Cursos;
use App\Http\Controllers\EscuelaController ;

//Route:: get ('cursos', function(){
   // return('bienvenido a la pagina cursos');
//});


// Route::get('Cursos',[CursosController::class,'week']);
// Route::get('/escuela', [EscuelaController ::class,'create']);
// Route::post('/escuela',[EscuelaController ::class,'escuelitas'])->name('escuela');


 Route::get('asociar',[TruckTruckerController::class,'asociar']);
 Route::post('asociar/truck_trucker',[TruckTruckerController ::class,'store'])->name('truck_trucker.store');
