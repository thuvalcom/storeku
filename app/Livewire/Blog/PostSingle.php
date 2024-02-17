<?php

namespace App\Livewire\Blog;

use App\Models\Post;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Layout;

class PostSingle extends Component
{
    #[Layout('layouts.shop')]
    public $post;
    public $slug;
    public $relatedPosts;
    public function render()
    {
        $this->relatedPosts = $this->getRelatedPosts();
        $posts = Post::orderBy('views', 'Desc')->take(3)->get();
        $products = Product::orderBy('id', 'Desc')->take(4)->get();
        return view('livewire.blog.post-single', compact('products', 'posts'));
    }

    public function mount($slug)
    {

        $post = \App\Models\Post::all();
        $this->post = \App\Models\Post::where('slug', $slug)->firstOrFail();
        $this->post->increment('views');
    }
    private function getRelatedPosts()
    {
        return Post::where('post_category_id', $this->post->post_category_id)
            ->where('id', '!=', $this->post->id) // Exclude current post
            ->orderBy('views', 'desc')
            ->take(4)
            ->get();
    }
}
