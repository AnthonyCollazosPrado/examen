<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de facturas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white px-4 py-4 dark:bg-gray-400 overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('facturas.create') }}">+ Crear nuevo</a>
                <br><br>

<table class="table">
    <thead>
        <tr>
            <th style="border: grey 1px solid; padding: 10px;">id</th>
            <th style="border: grey 1px solid; padding: 10px;">Nombre</th>
            <th style="border: grey 1px solid; padding: 10px;">Apellido</th>
            <th style="border: grey 1px solid; padding: 10px;">DNI</th>
            <th style="border: grey 1px solid; padding: 10px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $facturas as $factura)
            <tr>
                <td style="border: grey 1px solid; padding: 10px;">{{ $factura->id }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $factura->total }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $factura->observacion }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $factura->fecha }}</td>
                <td style="border: grey 1px solid; padding: 10px;">
                    <a href="{{ route('facturas.edit', $factura->id) }}">Editar</a>
                    <button type="button" onclick="confirmDelete('{{ $factura->id }}')">Borrar</button>
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
        form.action = 'facturas/' + id
        form.innerHTML = '@csrf @method("DELETE")'
        document.body.appendChild(form)
        form.submit()
        alert('Registro eliminado');
    }
</script>