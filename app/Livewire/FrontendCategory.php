<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class FrontendCategory extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.frontend-category', compact('categories'));
    }
}
