<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar factura detalle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-4 py-4 dark:bg-gray-400 overflow-hidden shadow-xl sm:rounded-lg">
                
                <form method="POST" action="{{ route('facturas_detalle.update', $factura_detalle->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <label for="costo_unitario">Costo unitario</label>
                    <input name="costo_unitario" value="{{ old('costo_unitario', $factura_detalle->costo_unitario) }}">
                    <label for="cantidad">Cantidad</label>
                    <input name="cantidad" value="{{ old('cantidad', $factura_detalle->cantidad) }}">
                    <label for="total">Total</label>
                    <input name="total" value="{{ old('total', $factura_detalle->total) }}">

                    <br><br>

                    <button type="submit">Actualizar</button>
                    <a href="{{ route('facturas_detalle.index') }}">Cancelar</a>

                </form>
        
            </div>
        </div>
    </div>
</x-app-layout>