<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white px-4 py-4 dark:bg-gray-400 overflow-hidden shadow-xl sm:rounded-lg">
                
                <form method="POST" action="{{ route('productos.store') }}">
                    @csrf

                    <label for="codigo">Código</label>
                    <input name="codigo">
                    <label for="descripcion">Descripción</label>
                    <input name="descripcion">
                    <label for="precio">Precio</label>
                    <input name="precio">

                    <br><br>

                    <button type="submit">Guardar</button>
                    <a href="{{ route('productos.index') }}">Cancelar</a>

                </form>
        
            </div>
        </div>
    </div>
</x-app-layout>