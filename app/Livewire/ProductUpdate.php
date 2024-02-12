<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProductUpdate extends Component
{
    #[Layout('layouts.backend')]
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        $users = User::all();
        return view('livewire.product-update', compact('categories', 'users'));
    }
}
