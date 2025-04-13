<?php

namespace App\Http\Controllers;

use App\Models\Ribo;
use Illuminate\Http\Request;

class RibosController extends Controller 
{
    public function index()
    {
        $ribo = Ribo::orderBy('created_at','asc')->get();

        return view('RiboBlog.index', ['users' => $ribo]);
    }

    public function show($id)
    {
        $ribo = Ribo::findOrFail($id);
        return view('RiboBlog.show', data: ['ribos' => $ribo]);
    }

    public function create()
    {
        return view('RiboBlog.create');
    }
}
