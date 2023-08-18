<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class AnotherTwo extends Component
{
    // Livewire Hooks
    #[Title('Another Two')]

    public function render()
    {
        return view('livewire.another-two');
    }
}
