<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        /*$request->validate([
            'codigo' => 'required|string|min:0|max:200',
            'descripcion' => 'required|string',
            'precio' => 'required|integer'
        ]);*/

        Producto::create($request->all());

        return redirect()->route('productos.index');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, string $id)
    {
        /*$request->validate([
            'name' => 'required|string|min:0|max:200',
            'age' => 'required|integer|min:1'
        ]);*/

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect()->route('productos.index');
    }

    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
