<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class ProductComponent extends Component
{
    use WithFileUploads;

    #[Layout('layouts.backend')]
    public $name;
    public $slug;
    public $description;
    public $category_id;
    public $price;
    public $image;
    public $user_id;


    public function save(): void
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:products,slug',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
            'user_id' => 'required',
        ]);
        // Generate the slug
        $this->slug = Str::slug($this->name, '-');
        $imagePath = $this->image->store('product_images', 'public');


        // Save the product
        Product::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'image' => $imagePath,
            'user_id' => $this->user_id
        ]);

        $this->reset([
            'name',
            'slug',
            'description',
            'category_id',
            'price',
            'image',
            'user_id',
        ]);

        session()->flash('success', 'Product Created successfully.');
        $this->redirect('/products', navigate: true);
    }


    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::all();
        $categories = Category::all();
        return view('livewire.product-component', compact('users', 'categories'));
    }

    public function updatedName(): void
    {
        $this->slug = Str::slug($this->name);
    }
}
