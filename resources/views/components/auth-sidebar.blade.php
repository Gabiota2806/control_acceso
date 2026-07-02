<div class="lg:hidden">
    <div class="border-b border-slate-200 bg-slate-950 px-4 py-3 text-slate-100">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-cyan-400 text-sm font-semibold text-slate-950">
                    S
                </div>
                <div>
                    <p class="text-sm font-semibold">Sistema</p>
                    <p class="text-xs text-slate-400">Panel interno</p>
                </div>
            </div>
            <button id="mobile-menu-button" type="button" class="rounded-lg border border-slate-800 px-3 py-2 text-sm text-slate-300" aria-controls="mobile-sidebar" aria-expanded="false">
                Menú
            </button>
        </div>
    </div>
</div>

<div id="mobile-sidebar-overlay" class="fixed inset-0 z-30 hidden bg-slate-950/70 lg:hidden"></div>

<aside id="mobile-sidebar" class="fixed inset-y-0 left-0 z-40 hidden w-72 flex-col border-r border-slate-800 bg-slate-950 text-slate-100 lg:static lg:flex lg:w-72">
    <div class="flex items-center gap-3 border-b border-slate-800 px-6 py-6">
        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-400 text-lg font-semibold text-slate-950">
            S
        </div>
        <div>
            <p class="text-sm font-semibold tracking-wide">Sistema</p>
            <p class="text-xs text-slate-400">Panel interno</p>
        </div>
    </div>

    <nav class="flex-1 space-y-1 px-3 py-4">
        <a href="{{ route('dashboard') }}"
           data-sidebar-link
           class="flex items-center rounded-lg px-3 py-2 text-sm font-medium text-slate-300 transition hover:bg-slate-800 hover:text-white">
            <span class="mr-3 text-base">▣</span>
            Dashboard
        </a>

        <a href="#"
           class="flex items-center rounded-lg px-3 py-2 text-sm font-medium text-slate-300 transition hover:bg-slate-800 hover:text-white">
            <span class="mr-3 text-base">📊</span>
            Reportes
        </a>

        <a href="#"
           class="flex items-center rounded-lg px-3 py-2 text-sm font-medium text-slate-300 transition hover:bg-slate-800 hover:text-white">
            <span class="mr-3 text-base">🛂</span>
            Registro de accesos
        </a>

        <a href="#"
           class="flex items-center rounded-lg px-3 py-2 text-sm font-medium text-slate-300 transition hover:bg-slate-800 hover:text-white">
            <span class="mr-3 text-base">👥</span>
            Usuarios
        </a>
    </nav>
</aside>
