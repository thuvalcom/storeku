<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class CategoryComponent extends Component
{
    use WithFileUploads;
    #[Layout('layouts.backend')]
    public $name;
    public $description;
    public $image;
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
        ]);
        $imagePath = $this->image->store('category_images', 'public');
        Category::create([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $imagePath,
        ]);

        // Reset form fields
        $this->reset(['name', 'description', 'image']);

        session()->flash('success', 'Category successfully created.');
        $this->redirect('/categories', navigate: true);
    }


    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        return view('livewire.category-component', compact('categories'));
    }
}
