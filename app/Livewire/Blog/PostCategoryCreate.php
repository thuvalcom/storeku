<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class PostCategoryCreate extends Component
{
    use WithFileUploads;
    #[Layout('layouts.backend')]
    public $name;
    public $slug;
    public $image;
    public $status;
    public $validatedData;
    public $selected_id;
    public $updateMode = false;
    public $confirmingDelete = false;
    public $categoryToDelete;
    public function save(): void
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug',
            'status'  => 'required|in:draft,published',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $this->slug = Str::slug($this->name, '-');
        $imagePath = $this->image->store('category_images', 'public');
        PostCategory::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $imagePath,
            'status' => $this->status,
        ]);

        // Reset form fields
        $this->reset(['name', 'status', 'image', 'slug']);

        session()->flash('success', 'Category successfully created.');
        $this->redirect('/post-category', navigate: true);
    }
    public function render()
    {
        return view('livewire.blog.post-category-create');
    }
}
