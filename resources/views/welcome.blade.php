<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Control de Acceso</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-slate-950 text-slate-100">
        <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(14,165,233,0.18),_transparent_34%),linear-gradient(180deg,_#020617_0%,_#0f172a_100%)]">
            <header class="mx-auto flex max-w-7xl items-center justify-between px-4 py-6 sm:px-6 lg:px-8">
                <a href="{{ url('/') }}" class="text-lg font-semibold tracking-wide text-white">
                    Control de Acceso
                </a>

                <div class="flex items-center gap-3">
                    @auth
                        <a href="{{ route('dashboard') }}" class="rounded-lg bg-white/10 px-4 py-2 text-sm font-medium text-white hover:bg-white/20">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-medium text-slate-300 hover:text-white">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="rounded-lg bg-white px-4 py-2 text-sm font-medium text-slate-900 hover:bg-slate-200">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </header>

            <main class="mx-auto max-w-7xl px-4 pb-20 pt-10 sm:px-6 lg:px-8 lg:pt-16">
                <section class="grid gap-10 lg:grid-cols-2 lg:items-center">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-300">
                            Sistema de control
                        </p>

                        <h1 class="mt-4 max-w-xl text-4xl font-bold leading-tight text-white sm:text-5xl">
                            Organizacion simple para controlar accesos
                        </h1>

                        <p class="mt-6 max-w-xl text-lg leading-8 text-slate-300">
                            Acceso seguro para usuarios autorizados. Iniciá sesión para entrar al panel interno.
                        </p>

                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="#" class="rounded-xl bg-cyan-400 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-300">
                                Empezar
                            </a>
                            <a href="#" class="rounded-xl border border-white/15 px-5 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                                Ver mas
                            </a>
                        </div>
                    </div>

                    <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl shadow-slate-950/40 backdrop-blur">
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="rounded-2xl bg-sky-500/10 p-5 ring-1 ring-white/10">
                                <h3 class="font-semibold text-white">Ingreso</h3>
                                <p class="mt-2 text-sm text-slate-300">Entrada segura al sistema.</p>
                            </div>
                            <div class="rounded-2xl bg-emerald-500/10 p-5 ring-1 ring-white/10">
                                <h3 class="font-semibold text-white">Sesión</h3>
                                <p class="mt-2 text-sm text-slate-300">Acceso para usuarios autorizados.</p>
                            </div>
                            <div class="rounded-2xl bg-amber-500/10 p-5 ring-1 ring-white/10">
                                <h3 class="font-semibold text-white">Seguridad</h3>
                                <p class="mt-2 text-sm text-slate-300">Protección de la información interna.</p>
                            </div>
                            <div class="rounded-2xl bg-white/5 p-5 ring-1 ring-white/10">
                                <h3 class="font-semibold text-white">Panel</h3>
                                <p class="mt-2 text-sm text-slate-300">Vista de acceso al entorno interno.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="mx-auto max-w-7xl px-4 pb-8 sm:px-6 lg:px-8">
                <div class="border-t border-white/10 pt-6 text-sm text-slate-400">
                    Portal público del sistema.
                </div>
            </footer>
        </div>
    </body>
</html>
