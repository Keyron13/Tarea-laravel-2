<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    
    public function index()
    {
        $provincias = Provincia::all();
        return view('provincias.index',compact('provincias'));
    }

    
    public function create()
    {
        return view('provincias.crear');
    }

    
    public function store(Request $request)
    {
        $provincia = new Provincia();
        $provincia->canton = $request->canton;
        $provincia->codigo = $request->codigo;
        $provincia->save();
        return redirect('/provincias');
    }

    
    public function show(Provincia $provincia)
    {
        //
    }

    
    public function edit($id)
    {
        $provincia = Provincia::find($id);
        return view('provincias.edit', compact('provincia'));
    }

    
    public function update(Request $request, $id)
    {
        $provincia = Provincia::find($id);
        $provincia->canton = $request->canton;
        $provincia->codigo = $request->codigo;
        $provincia->save();
        return redirect('/provincias');
    }

    
    public function destroy($id)
    {
        Provincia::find($id)->delete();
        return redirect('/provincias');
    }
}
