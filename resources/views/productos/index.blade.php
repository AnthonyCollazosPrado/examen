<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white px-4 py-4 dark:bg-gray-400 overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('productos.create') }}">+ Crear nuevo</a>
                <br><br>

<table>
    <thead>
        <tr>
            <th style="border: grey 1px solid; padding: 10px;">id</th>
            <th style="border: grey 1px solid; padding: 10px;">Nombre</th>
            <th style="border: grey 1px solid; padding: 10px;">Descripción</th>
            <th style="border: grey 1px solid; padding: 10px;">Precio</th>
            <th style="border: grey 1px solid; padding: 10px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $productos as $producto)
            <tr>
                <td style="border: grey 1px solid; padding: 10px;">{{ $producto->id }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $producto->codigo }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $producto->descripcion }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $producto->precio }}</td>
                <td style="border: grey 1px solid; padding: 10px;">
                    <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                    <button type="button" onclick="confirmDelete('{{ $producto->id }}')">Borrar</button>
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
        form.action = 'productos/' + id
        form.innerHTML = '@csrf @method("DELETE")'
        document.body.appendChild(form)
        form.submit()
        alert('Registro eliminado');
    }
</script>