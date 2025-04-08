<?php

use Illuminate\Support\Facades\Route;

#Defined on what web browser reponsed in http request
Route::get('/', function () {
    $data = [
        'users' => [
        ['name' => 'Alice', 'skill' => '75', 'id' => 1], 
        ['name' => 'Charlie', 'skill' => '70', 'id' => 2], 
        ['name' => 'Bon', 'skill' => '80', 'id' => 3]],
    ];

    return view('RiboBlog.index', ['greeting' => 'Hello', 'users' => $data['users']]);
});

Route::get('create', function (){
    return view('RiboBlog.create');
});

Route::get('/{id}', function ($id) {
    return view('Riboblog.show', data: ['id' => $id]);
});
