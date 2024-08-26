<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::all();
        return view('facturas.index', compact('facturas'));
    }

    public function create()
    {
        return view('facturas.create');
    }

    public function store(Request $request)
    {
        /*$request->validate([
            'codigo' => 'required|string|min:0|max:200',
            'descripcion' => 'required|string',
            'precio' => 'required|integer'
        ]);*/

        Factura::create($request->all());

        return redirect()->route('facturas.index');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $factura = Factura::findOrFail($id);
        return view('facturas.edit', compact('factura'));
    }

    public function update(Request $request, string $id)
    {
        /*$request->validate([
            'name' => 'required|string|min:0|max:200',
            'age' => 'required|integer|min:1'
        ]);*/

        $factura = Factura::findOrFail($id);
        $factura->update($request->all());

        return redirect()->route('facturas.index');
    }

    public function destroy(string $id)
    {
        $factura = Factura::findOrFail($id);
        $factura->delete();
        return redirect()->route('facturas.index');
    }
}
