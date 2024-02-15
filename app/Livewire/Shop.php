<?php

namespace App\Livewire;


use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class Shop extends Component
{
    use WithPagination;
    #[Layout('layouts.shop')]
    public $product;
    public $slug;
    public function render()
    {
        $products = Product::orderBy('id', 'Desc')->paginate(3);
        return view('livewire.shop', compact('products'));
    }

    public function mount($slug)
    {

        $product = Product::all();
        $this->product = Product::where('slug', $slug)->firstOrFail();
    }
}
