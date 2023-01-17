<?php

namespace App\Http\Controllers;

use App\Models\Fruta;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
    
    public function index()
    {
        $frutas = Fruta::all();
        return view('frutas.index',compact('frutas'));
    }

    
    public function create()
    {
        return view('frutas.crear');
    }

    
    public function store(Request $request)
    {
        $fruta = new Fruta();
        $fruta->nombre = $request->nombre;
        $fruta->cantidad = $request->cantidad;
        $fruta->save();
        return redirect('/frutas');
    }

    
    public function show(Fruta $fruta)
    {
        //
    }

    
    public function edit($id)
    {
        $fruta = Fruta::find($id);
        return view('frutas.edit', compact('fruta'));
    }

    
    public function update(Request $request, $id)
    {
        $fruta = Fruta::find($id);
        $fruta->nombre = $request->nombre;
        $fruta->cantidad = $request->cantidad;
        $fruta->save();
        return redirect('/frutas');
    }

    
    public function destroy($id)
    {
        Fruta::find($id)->delete();
        return redirect('/frutas');
    }
}
