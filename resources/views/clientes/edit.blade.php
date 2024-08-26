<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-4 py-4 dark:bg-gray-400 overflow-hidden shadow-xl sm:rounded-lg">
                
                <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <label for="nombre">Nombre</label>
                    <input name="nombre" value="{{ old('nombre', $cliente->nombre) }}">
                    <label for="apellido">Apellido</label>
                    <input name="apellido" value="{{ old('apellido', $cliente->apellido) }}">
                    <label for="dni">DNI</label>
                    <input name="dni" value="{{ old('dni', $cliente->dni) }}">

                    <br><br>

                    <button type="submit">Actualizar</button>
                    <a href="{{ route('clientes.index') }}">Cancelar</a>

                </form>
        
            </div>
        </div>
    </div>
</x-app-layout>