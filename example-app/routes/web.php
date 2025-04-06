<?php

use Illuminate\Support\Facades\Route;

#Defined on what web browser reponsed in http request
Route::get('/', function () {

    $data = [
        'users' => [ 
            ['name' => 'Alice', 'skill' => 'PHP', 'id' => 1],
            ['name' => 'Charlie', 'skill' => 'Python', 'id' => 2],
            ['name' => 'Charlie', 'skill' => 'Python', 'id' => 3],
        ]
    ];

    return view('RiboBlog.index', ["users" => $data['users']]);
});

Route::get('/{id}', function ($id) {

    return view('Riboblog.show', data: ["id" => $id]);
});