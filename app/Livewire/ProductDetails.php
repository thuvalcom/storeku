<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class ProductDetails extends Component
{
    use WithPagination;
    #[Layout('layouts.frontend')]
    public $category;
    public $products;

    public function mount($slug)
    {
        $this->category = Category::where('slug', $slug)->first();

        if ($this->category) {
            $this->products = $this->category->products;
        } else {
            abort(404); // Atau sesuaikan dengan cara menangani ketika kategori tidak ditemukan
        }
    }
    public function render()
    {
        return view('livewire.product-details');
    }
}
