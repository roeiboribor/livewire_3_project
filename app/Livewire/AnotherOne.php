<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class AnotherOne extends Component
{
    // Livewire Hooks
    #[Title('Another One')]

    public function render()
    {
        return view('livewire.another-one');
    }
}
