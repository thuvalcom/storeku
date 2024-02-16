<?php

namespace App\Livewire;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;

class PagesCreate extends Component
{
    #[Layout('layouts.backend')]
    public $name;
    public $description;
    public $slug;
    public function render()
    {
        return view('livewire.pages-create');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required|unique:pages,slug',
        ]);
        $this->slug = Str::slug($this->name, '-');

        Page::create([
            'name' => $this->name,
            'description' => $this->description,
            'slug' => $this->slug,

        ]);

        $this->reset([
            'name',
            'description',
            'slug',
        ]);

        session()->flash('success', 'Pages Created successfully.');
        $this->redirect('/pages', navigate: true);
    }
}
