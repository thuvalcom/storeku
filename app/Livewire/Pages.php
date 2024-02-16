<?php

namespace App\Livewire;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class Pages extends Component
{
    use WithPagination;
    #[Layout('layouts.backend')]
    public $name;
    public $description;
    public $slug;
    public $selected_id;
    public $updateMode = false;
    public $confirmingDelete = false;
    public $pageToDelete;
    public $updateName;
    public $keyword;
    public function render()
    {
        if ($this->keyword != null) {
            $pages = Page::where('name', 'like', '%' . $this->keyword . '%')->orderBy('id', 'asc')->paginate(5);
        } else {
            $pages = Page::orderBy('id', 'Desc')->paginate(4);
        }

        return view('livewire.pages', compact('pages'));
    }
    public function updatedName(): void
    {
        $this->slug = Str::slug($this->name);
    }
    public function edit($id): void
    {
        $page = Page::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $page->name;
        $this->description = $page->description;
        $this->slug = $page->slug;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $page = Page::findOrFail($this->selected_id);
        $this->slug = Str::slug($this->name, '-');
        $page->update([
            'name' => $this->name,
            'description' => $this->description,
            'slug' => $this->slug,
        ]);
        $this->updatedName();
        $this->updateMode = false;
        $this->reset();
        session()->flash('success', 'Pages Updated successfully.');
        $this->redirect('/pages', navigate: true);
    }

    public function confirmDelete($id): void
    {
        $this->selected_id = $id;
        $this->confirmingDelete = true;
        $this->pageToDelete = Page::find($id);
    }

    public function destroy($id): void
    {
        $page = Page::findOrFail($id);
        $page->delete();
        $this->confirmingDelete = false;
        session()->flash('success', 'Page Deleted successfully.');
        $this->redirect('/pages', navigate: true);
    }
}
