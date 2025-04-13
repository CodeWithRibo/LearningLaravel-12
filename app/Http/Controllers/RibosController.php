<?php

namespace App\Http\Controllers;

use App\Models\Ribo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RibosController extends Controller 
{
    protected $ribo;

    public function index()
    {
        $this->ribo = Ribo::sorted()->paginate(10);

        return view('RiboBlog.index', ['users' => $this->ribo]);
    }

    public function show($id)
    {
        $this->ribo = Ribo::findOrFail($id);
        return view('RiboBlog.show', data: ['ribos' => $this->ribo]);
    }

    public function create()
    {
        return view('RiboBlog.create');
    }
}
