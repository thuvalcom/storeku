<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class Frontend extends Component
{
    use WithPagination;
    #[Layout('layouts.frontend')]
    public function render()
    {
        $categories = Category::all();
        $products = Product::orderBy('id', 'desc')->paginate(5);
        foreach ($products as $product) {
            $product->price = 'Rp ' . number_format($product->price, 0, ',', '.');
        }
        return view('livewire.frontend', compact('categories', 'products'));
    }
}
