<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

/**
 * Componente representa el layout principal de la aplicacion 
 * se encarga de cargar la vista base usada por las pagias autenticadas
 */

class AppLayout extends Component
{
    public function render(): View
    {
        return view('layouts.app');
    }
}