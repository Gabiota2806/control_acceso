<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-slate-100 text-slate-900">
        <div class="min-h-screen bg-slate-100">
            <div class="flex min-h-screen flex-col lg:flex-row">
                <x-auth-sidebar />

                <div class="flex min-h-screen flex-1 flex-col">
                    <livewire:layout.navigation />

                    @if (isset($header))
                        <header class="border-b border-slate-200 bg-white shadow-sm">
                            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif

                    <main class="flex-1 bg-slate-50">
                        {{ $slot }}
                    </main>

                    <footer class="border-t border-slate-200 bg-white">
                        <div class="mx-auto flex max-w-7xl flex-col gap-2 px-4 py-6 text-sm text-slate-500 sm:flex-row sm:items-center sm:justify-between sm:px-6 lg:px-8">
                            <p>Control de Acceso</p>
                            <p>Esqueleto base del panel interno.</p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
