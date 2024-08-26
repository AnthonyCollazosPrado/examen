<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-4 py-4 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    
                <a href="{{ route('facturas.index') }}">Ingresa al listado de productos usando el navegador o por aquí</a>
                
                </h2>
                <!-- <x-welcome /> -->
            </div>
        </div>
    </div>
</x-app-layout>
