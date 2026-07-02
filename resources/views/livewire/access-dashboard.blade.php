<!-- wire:poll.2s hace que este div consulte al backend cada 2 segundos sin recargar la página -->
<div wire:poll.2s>
    <h3 class="text-lg font-medium mb-4">Registro de Accesos en Tiempo Real</h3>

    <!-- Esqueleto de Tabla (Sin diseño Tailwind complejo para que Alexia pueda trabajar) -->
    <table style="width: 100%; text-align: left; border-collapse: collapse; margin-top: 10px;">
        <thead>
            <tr style="border-bottom: 1px solid #ccc;">
                <th style="padding: 8px;">Hora</th>
                <th style="padding: 8px;">UID de Tarjeta</th>
                <th style="padding: 8px;">Nombre (API)</th>
                <th style="padding: 8px;">Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($accesses as $access)
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 8px;">{{ $access->created_at->format('H:i:s') }}</td>
                    <td style="padding: 8px;">{{ $access->card_uid }}</td>
                    <td style="padding: 8px;">{{ $access->gym_member_name ?? 'Desconocido' }}</td>
                    <td style="padding: 8px;">
                        @if($access->status === 'approved')
                            <span style="color: green; font-weight: bold;">Acceso Permitido</span>
                        @else
                            <span style="color: red; font-weight: bold;">Acceso Denegado</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="padding: 8px; text-align: center;">No hay registros de acceso aún.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
