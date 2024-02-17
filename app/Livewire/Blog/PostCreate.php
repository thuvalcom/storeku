<?php

namespace App\Livewire\Blog;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class PostCreate extends Component
{
    use WithFileUploads;
    #[Layout('layouts.backend')]
    public $title;
    public $slug;
    public $content;
    public $post_category_id;
    public $user_id;
    public $image;
    public $status;
    public $views;
    public $description;
    public $keyword;
    public function save(): void
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'slug' => 'required|unique:categories,slug',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'post_category_id' => 'required',
            'user_id' => 'required|integer|exists:users,id',
            'status'  => 'required|in:draft,published',
            'description' => 'required',
            'keyword' => 'required',
        ]);
        $this->slug = Str::slug($this->title, '-');
        $imagePath = $this->image->store('post_images', 'public');
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'slug' => $this->slug,
            'image' => $imagePath,
            'status' => $this->status,
            'post_category_id' => $this->post_category_id,
            'user_id' => $this->user_id,
            'description' => $this->description,
            'keyword' => implode(',', array_map('trim', explode(',', $this->keyword))),
        ]);

        // Reset form fields
        $this->reset(['title', 'status', 'image', 'slug', 'content', 'post_category_id', 'user_id', 'description', 'keyword']);

        session()->flash('success', 'Category successfully created.');
        $this->redirect('/posts', navigate: true);
    }
    public function render()
    {
        $users = User::all();
        $postcategories = PostCategory::all();
        return view('livewire.blog.post-create', compact('users', 'postcategories'));
    }
}
