<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RibosController;
#Defined on what web browser reponsed in http request
/* 
Handle request by Controller
*/

Route::get('/', [RibosController::class,'index'])->name('index'); //!HOMEPAGE
Route::get('create',[RibosController::class,'create'] )->name('create');//!CREATE
Route::get('/{id}', [RibosController::class, 'show'])->name('show');//!SHOW