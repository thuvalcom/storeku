<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    #[Layout('layouts.backend')]
    public $name;
    public $description;
    public $slug;
    public $user_id;
    public $image;
    public $price;
    public $category_id;
    public $selected_id;
    public $updateMode = false;
    public $confirmingDelete = false;
    public $productToDelete;
    public $updateName;
    public $keyword;


    public function render()
    {
        if ($this->keyword != null) {
            $products = Product::where('name', 'like', '%' . $this->keyword . '%')->orderBy('id', 'asc')->paginate(5);
        } else {
            $products = Product::orderBy('id', 'desc')->paginate(5);
        }
        foreach ($products as $product) {
            $product->price = 'Rp ' . number_format($product->price, 0, ',', '.');
        }

        $categories = Category::all();
        $users = User::all();
        return view('livewire.product-index', compact('products', 'categories', 'users'));
    }

    public function updatedName(): void
    {
        $this->slug = Str::slug($this->name);
    }

    public function edit($id): void
    {
        $product = Product::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->image = $product->image;
        $this->user_id = $product->user_id;
        $this->category_id = $product->category_id;
        $this->updateMode = true;
    }

    public function update(): void
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable',
            'user_id' => 'required',
        ]);
        $product = Product::findOrFail($this->selected_id);
        if ($this->image instanceof TemporaryUploadedFile && $this->image->isValid()) {
            // Delete the old image from the storage
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }
            $imagePath = $this->image->store('product_images', 'public');
            $product->image = $imagePath;
        }
        $this->slug = Str::slug($this->name, '-');
        $product->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
        ]);
        if (isset($imagePath)) {
            $product->update(['image' => $imagePath]);
        }
        $this->updatedName();
        $this->updateMode = false;
        $this->reset();
        session()->flash('success', 'Product Updated successfully.');
        $this->redirect('/products', navigate: true);
    }

    public function confirmDelete($id): void
    {
        $this->selected_id = $id;
        $this->confirmingDelete = true;
        $this->productToDelete = Product::find($id);

    }

    public function destroy($id): void
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $this->confirmingDelete = false;
        session()->flash('success', 'Product Deleted successfully.');
        $this->redirect('/products', navigate: true);
    }


}
