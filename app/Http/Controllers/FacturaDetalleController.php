<?php

namespace App\Http\Controllers;

use App\Models\FacturaDetalle;
use Illuminate\Http\Request;

class FacturaDetalleController extends Controller
{
    public function index()
    {
        $facturas_detalle = FacturaDetalle::all();
        return view('facturas_detalle.index', compact('facturas_detalle'));
    }

    public function create()
    {
        return view('facturas_detalle.create');
    }

    public function store(Request $request)
    {
        /*$request->validate([
            'codigo' => 'required|string|min:0|max:200',
            'descripcion' => 'required|string',
            'precio' => 'required|integer'
        ]);*/

        FacturaDetalle::create($request->all());

        return redirect()->route('facturas_detalle.index');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $factura_detalle = FacturaDetalle::findOrFail($id);
        return view('facturas_detalle.edit', compact('factura_detalle'));
    }

    public function update(Request $request, string $id)
    {
        /*$request->validate([
            'name' => 'required|string|min:0|max:200',
            'age' => 'required|integer|min:1'
        ]);*/

        $factura_detalle = FacturaDetalle::findOrFail($id);
        $factura_detalle->update($request->all());

        return redirect()->route('facturas_detalle.index');
    }

    public function destroy(string $id)
    {
        $factura_detalle = FacturaDetalle::findOrFail($id);
        $factura_detalle->delete();
        return redirect()->route('facturas_detalle.index');
    }
}
