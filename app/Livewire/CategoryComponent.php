<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class CategoryComponent extends Component
{
    use WithFileUploads;
    #[Layout('layouts.backend')]
    public $name;
    public $description;
    public $image;
    public $slug;
    public $validatedData;
    public $selected_id;
    public $updateMode = false;
    public $confirmingDelete = false;
    public $categoryToDelete;

    public function save(): void
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
            'slug' => 'required|unique:categories,slug',
        ]);
        $this->slug = Str::slug($this->name, '-');
        $imagePath = $this->image->store('category_images', 'public');
        Category::create([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $imagePath,
            'slug' => $this->slug,
        ]);

        // Reset form fields
        $this->reset(['name', 'description', 'image', 'slug']);

        session()->flash('success', 'Category successfully created.');
        $this->redirect('/categories', navigate: true);
    }


    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        return view('livewire.category-component', compact('categories'));
    }
}
