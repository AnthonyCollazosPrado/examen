<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar factura') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-4 py-4 dark:bg-gray-400 overflow-hidden shadow-xl sm:rounded-lg">
                
                <form method="POST" action="{{ route('facturas.update', $factura->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <label for="total">Total</label>
                    <input name="total" value="{{ old('total', $factura->total) }}">
                    <label for="observacion">Observación</label>
                    <input name="observacion" value="{{ old('observacion', $factura->observacion) }}">
                    <label for="fecha">Fecha</label>
                    <input name="fecha" value="{{ old('fecha', $factura->fecha) }}">

                    <br><br>

                    <button type="submit">Actualizar</button>
                    <a href="{{ route('facturas.index') }}">Cancelar</a>

                </form>
        
            </div>
        </div>
    </div>
</x-app-layout>