<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel interno') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid gap-6 lg:grid-cols-3">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Usuarios</h3>
                        <p class="mt-2 text-sm text-gray-600">Alta, baja y administración de perfiles.</p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Reportes</h3>
                        <p class="mt-2 text-sm text-gray-600">Resumen de actividad y control interno.</p>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Configuración</h3>
                        <p class="mt-2 text-sm text-gray-600">Parámetros del sistema y opciones generales.</p>
                    </div>
                </div>
            </div>

            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Invocamos al componente Livewire del Dashboard de Auditoría -->
                    <livewire:access-dashboard />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
