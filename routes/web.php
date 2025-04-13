<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RibosController;
#Defined on what web browser reponsed in http request
/* 
Handle request by Controller
*/

Route::get('/', [RibosController::class,'index']); //!HOMEPAGE
Route::get('create',[RibosController::class,'create'] );//!CREATE
Route::get('/{id}', [RibosController::class, 'show']);//!SHOW