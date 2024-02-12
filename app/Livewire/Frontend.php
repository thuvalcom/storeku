<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Layout;

class Frontend extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        $categories = Category::all();
        $products = Product::all();
        foreach ($products as $product) {
            $product->price = 'Rp ' . number_format($product->price, 0, ',', '.');
        }
        return view('livewire.frontend', compact('categories', 'products'));
    }
}
