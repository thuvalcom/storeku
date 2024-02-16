<?php

namespace App\Livewire;

use App\Models\Page;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Contact extends Component
{
    #[Layout('layouts.shop')]
    public $page;

    public function mount()
    {

        $this->page = Page::where('slug', 'contact')->first();
    }

    public function render()
    {
        $products = Product::orderBy('id', 'Desc')->paginate(3);
        return view('livewire.contact', compact('products'));
    }
}
