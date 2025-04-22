<?php

namespace App\Http\Controllers;

use App\Models\Ribo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class RibosController extends Controller
{
    protected $ribo;
    protected $validate;


    public function index()
    {
        $this->ribo = Ribo::sorted()->paginate(10);

        return view('RiboBlog.index', ['users' => $this->ribo]);
    }

    public function show($id)
    {
        $this->ribo = Ribo::findOrFail($id);
        return view('RiboBlog.show', ['ribos' => $this->ribo]);
    }

    public function create()
    {
        return view('RiboBlog.create');
    }

    public function store(Request $request)
    {
        $this->validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'skill' => ['required','integer','min:0','max:100'],
            'bio' => ['required','string','min:20','max:1000']
        ]);

        Ribo::create($this->validate);

        return redirect('/');
    }

    public function destroy($id)
    {
        $this->ribo = Ribo::findOrFail($id);
        $this->ribo->delete();

        return redirect('/')->with('status','Blog post sucessfully deleted');
    }
}
