<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CategoryUpdate extends Component
{
    #[Layout('layouts.backend')]
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.category-update');
    }
}
