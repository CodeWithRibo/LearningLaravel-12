<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RibosController;
#Defined on what web browser reponsed in http request
Route::get('/', [RibosController::class, 'index']);

Route::get('create', function () {
    return view('RiboBlog.create');
});

Route::get('/{id}', function ($id) {
    return view('RiboBlog.show', data: ['id' => $id]);
});
