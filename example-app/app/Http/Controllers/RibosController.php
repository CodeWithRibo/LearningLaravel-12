<?php

namespace App\Http\Controllers;

use App\Models\Ribo;
use Illuminate\Http\Request;

class RibosController extends Controller
{
    public function index()
    {
        $ribos = Ribo::orderBy('created_at','asc')->get();

        return view('RiboBlog.index', ['users' => $ribos]);
    }

    public function show($id)
    {
        // route --> /ninjas/{id}
        // fetch a single record & pass into show view
    }

    public function create()
    {
        // route --> /ninjas/create
        // render a create view (with web form) to users
    }

    public function store()
    {
        // --> /ninjas/ (POST)
        // hanlde POST request to store a new ninja record in table
    }

    public function destroy($id)
    {
        // --> /ninjas/{id} (DELETE)
        // handle delete request to delete a ninja record from table
    }
}
