<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        /*$request->validate([
            'codigo' => 'required|string|min:0|max:200',
            'descripcion' => 'required|string',
            'precio' => 'required|integer'
        ]);*/

        Cliente::create($request->all());

        return redirect()->route('clientes.index');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, string $id)
    {
        /*$request->validate([
            'name' => 'required|string|min:0|max:200',
            'age' => 'required|integer|min:1'
        ]);*/

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
