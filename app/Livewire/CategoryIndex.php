<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class CategoryIndex extends Component
{
    use WithFileUploads;
    use WithPagination;
    #[Layout('layouts.backend')]

    public $name;
    public $description;
    public $image;
    public $selected_id;
    public $updateMode = false;
    public $confirmingDelete = false;
    public $categoryToDelete;
    public $keyword;

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        if ($this->keyword != null) {
            $categories = Category::where('name', 'like', '%' . $this->keyword . '%')->orderBy('id', 'asc')->paginate(5);
        } else {
            $categories = Category::orderBy('id', 'asc')->paginate(5);
        }
        return view('livewire.category-index', compact('categories'));
    }

    public function edit($id): void
    {
        $category = Category::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $category->name;
        $this->description = $category->description;
        $this->image = $category->image;
        $this->updateMode = true;
    }

    public function update(): void
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable',
        ]);

        $category = Category::findOrFail($this->selected_id);
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
            'description' => $this->description,
        ]);
        if (isset($imagePath)) {
            $category->update(['image' => $imagePath]);
        }

        $this->reset(['name', 'description', 'image']);
        $this->updateMode = false;
        session()->flash('success', 'Category successfully updated.');
        $this->redirect('/categories', navigate: true);
    }

    public function confirmDelete($id): void
    {
        $this->selected_id = $id;
        $this->confirmingDelete = true;
        $this->categoryToDelete = Category::find($id);
    }

    public function destroy($id): void
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $this->confirmingDelete = false;
        session()->flash('success', 'Category successfully deleted.');
        $this->redirect('/categories', navigate: true);
    }
}
