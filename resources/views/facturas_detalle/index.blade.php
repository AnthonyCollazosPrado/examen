<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de facturas detalle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white px-4 py-4 dark:bg-gray-400 overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('facturas_detalle.create') }}">+ Crear nuevo</a>
                <br><br>

<table class="table">
    <thead>
        <tr>
            <th style="border: grey 1px solid; padding: 10px;">id</th>
            <th style="border: grey 1px solid; padding: 10px;">Costo unitario</th>
            <th style="border: grey 1px solid; padding: 10px;">Cantidad</th>
            <th style="border: grey 1px solid; padding: 10px;">Total</th>
            <th style="border: grey 1px solid; padding: 10px;">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ( $facturas_detalle as $factura_detalle)
            <tr>
                <td style="border: grey 1px solid; padding: 10px;">{{ $factura_detalle->id }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $factura_detalle->costo_unitario }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $factura_detalle->cantidad }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $factura_detalle->total }}</td>
                <td style="border: grey 1px solid; padding: 10px;">
                    <a href="{{ route('facturas_detalle.edit', $factura_detalle->id) }}">Editar</a>
                    <button type="button" onclick="confirmDelete('{{ $factura_detalle->id }}')">Borrar</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function confirmDelete(id) {
        let form = document.createElement('form')
        form.method = 'POST'
        form.action = 'facturas_detalle/' + id
        form.innerHTML = '@csrf @method("DELETE")'
        document.body.appendChild(form)
        form.submit()
        alert('Registro eliminado');
    }
</script>