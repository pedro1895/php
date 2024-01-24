<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\ShepherdController;

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

//CHURCH
Route::get('/church/index',  [ChurchController::class,'index'] )->name('church.index');
Route::get('/church/edit/{id}',  [ChurchController::class,'edit'] )->name('church.edit');
Route::post('/church/update/{id}',  [ChurchController::class,'update'] )->name('church.update');
Route::get('/church/delete/{id}',  [ChurchController::class,'delete'] )->name('church.delete');
Route::post('/church/save',  [ChurchController::class,'save'] )->name('church.save');
Route::get('/church/create',  [ChurchController::class,'create'] )->name('church.create');

//SHEPHERD
Route::get('/shepherd/index',  [ShepherdController::class,'index'] )->name('shepherd.index');
Route::get('/shepherd/edit/{id}',  [ShepherdController::class,'edit'] )->name('shepherd.edit');
Route::post('/shepherd/update/{id}',  [ShepherdController::class,'update'] )->name('shepherd.update');
Route::get('/shepherd/delete/{id}',  [ShepherdController::class,'delete'] )->name('shepherd.delete');
Route::post('/shepherd/save',  [ShepherdController::class,'save'] )->name('shepherd.save');
Route::get('/shepherd/create',  [ShepherdController::class,'create'] )->name('shepherd.create');
