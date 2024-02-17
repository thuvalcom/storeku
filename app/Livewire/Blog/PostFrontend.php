<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class PostFrontend extends Component
{
    use WithPagination;
    #[Layout('layouts.shop')]
    public function render()
    {
        $categories = Category::all();
        $postcategories = \App\Models\PostCategory::all();
        $products = \App\Models\Product::orderBy('id', 'desc')->paginate(3);
        $posts = \App\Models\Post::orderBy('id', 'desc')->paginate(4);
        return view('livewire.blog.post-frontend', compact('categories', 'products', 'posts', 'postcategories'));
    }
}
