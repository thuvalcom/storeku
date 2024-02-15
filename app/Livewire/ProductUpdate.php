<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class ProductUpdate extends Component
{
    use WithFileUploads;
    #[Layout('layouts.backend')]
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        $users = User::all();
        return view('livewire.product-update', compact('categories', 'users'));
    }
}
