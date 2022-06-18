<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RotaController; 


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
        return view('Rota'); 
    });  
 
    Route::get('/',[RotaController::class, 'viewRota'])->name('admin.VirualBalance');
    Route::post('/', [RotaController::class, 'rota'])->name('rota.show');



     