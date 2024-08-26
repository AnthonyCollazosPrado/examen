<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white px-4 py-4 dark:bg-gray-400 overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('clientes.create') }}">+ Crear nuevo</a>
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
        @foreach ( $clientes as $cliente)
            <tr>
                <td style="border: grey 1px solid; padding: 10px;">{{ $cliente->id }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $cliente->nombre }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $cliente->apellido }}</td>
                <td style="border: grey 1px solid; padding: 10px;">{{ $cliente->dni }}</td>
                <td style="border: grey 1px solid; padding: 10px;">
                    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                    <button type="button" onclick="confirmDelete('{{ $cliente->id }}')">Borrar</button>
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
        form.action = 'clientes/' + id
        form.innerHTML = '@csrf @method("DELETE")'
        document.body.appendChild(form)
        form.submit()
        alert('Registro eliminado');
    }
</script>