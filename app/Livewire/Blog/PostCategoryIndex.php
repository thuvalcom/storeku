<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PostCategoryIndex extends Component
{
    use WithFileUploads;
    use WithPagination;
    #[Layout('layouts.backend')]
    public $name;
    public $status;
    public $image;
    public $slug;
    public $selected_id;
    public $updateMode = false;
    public $confirmingDelete = false;
    public $categoryToDelete;
    public $keyword;
    public function edit($id): void
    {
        $category = PostCategory::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->image = $category->image;
        $this->status = $category->status;
        $this->updateMode = true;
    }
    public function update(): void
    {
        $this->validate([
            'name' => 'required',
            'status'  => 'required|in:draft,published',
            'image' => 'nullable',
        ]);

        $category = PostCategory::findOrFail($this->selected_id);
        $this->slug = Str::slug($this->name, '-');
        if ($this->image instanceof TemporaryUploadedFile && $this->image->isValid()) {
            // Delete the old image from the storage
            if ($category->image) {
                Storage::delete('public/' . $category->image);
            }
            $imagePath = $this->image->store('category_images', 'public');
            $category->image = $imagePath;
        }
        $category->update([
            'name' => $this->name,
            'status' => $this->status,
            'slug' => $this->slug,
        ]);
        if (isset($imagePath)) {
            $category->update(['image' => $imagePath]);
        }

        $this->reset(['name', 'status', 'image', 'slug']);
        $this->updateMode = false;
        session()->flash('success', 'Category successfully updated.');
        $this->redirect('/post-category', navigate: true);
    }
    public function confirmDelete($id): void
    {
        $this->selected_id = $id;
        $this->confirmingDelete = true;
        $this->categoryToDelete = PostCategory::find($id);
    }

    public function destroy($id): void
    {
        $category = PostCategory::findOrFail($id);
        $category->delete();
        $this->confirmingDelete = false;
        session()->flash('success', 'Category successfully deleted.');
        $this->redirect('/post-category', navigate: true);
    }
    public function render()
    {
        if ($this->keyword != null) {
            $postcategories = PostCategory::where('name', 'like', '%' . $this->keyword . '%')->orderBy('id', 'asc')->paginate(5);
        } else {
            $postcategories = PostCategory::orderBy('id', 'asc')->paginate(5);
        }
        return view('livewire.blog.post-category-index', compact('postcategories'));
    }
}
