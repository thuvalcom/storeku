<?php

namespace App\Livewire;

use App\Models\Page;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

class About extends Component
{
    #[Layout('layouts.shop')]
    public $page;

    public function mount()
    {
        // Mengambil data halaman "About" berdasarkan slug
        $this->page = Page::where('slug', 'about')->first();
    }

    public function render()
    {
        $products = Product::orderBy('id', 'Desc')->paginate(3);
        return view('livewire.about', compact('products'));
    }
}
