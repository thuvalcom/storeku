<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class PagesUpdate extends Component
{
    #[Layout('layouts.backend')]
    public function render()
    {
        return view('livewire.pages-update');
    }
}
