<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChurchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',  [HomeController::class,'index'] );
Route::get('/church/index',  [ChurchController::class,'index'] )->name('church.index');
Route::get('/church/edit/{id}',  [ChurchController::class,'edit'] )->name('church.edit');

//ALTERADO
Route::post('/church/update/{id}',  [ChurchController::class,'update'] )->name('church.update');

Route::get('/church/delete/{id}',  [ChurchController::class,'delete'] )->name('church.delete');



//TESTE DE REUSO DE ROTA DE EDIÇÃO
Route::post('/church/save',  [ChurchController::class,'save'] )->name('church.save');
Route::get('/church/create',  [ChurchController::class,'create'] )->name('church.create');