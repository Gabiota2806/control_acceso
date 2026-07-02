<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Access;

class AccessDashboard extends Component
{
    public function render()
    {
        // Traemos los últimos 10 accesos ordenados por fecha de creación (los más nuevos arriba)
        $accesses = Access::orderBy('created_at', 'desc')->take(10)->get();

        return view('livewire.access-dashboard', [
            'accesses' => $accesses
        ]);
    }
}
