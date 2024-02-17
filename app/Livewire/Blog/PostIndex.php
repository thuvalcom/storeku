<?php

namespace App\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PostIndex extends Component
{
    use WithPagination;
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
    public $selected_id;
    public $updateMode = false;
    public $confirmingDelete = false;
    public $postToDelete;
    public $updateName;
    public $keywords;
    public function render()
    {
        if ($this->keywords != null) {
            $posts = Post::where('title', 'like', '%' . $this->keywords . '%')->orderBy('id', 'asc')->paginate(5);
        } else {
            $posts = Post::orderBy('id', 'desc')->paginate(5);
        }

        $postcategories = \App\Models\PostCategory::all();
        $users = \App\Models\User::all();
        return view('livewire.blog.post-index', compact('postcategories', 'users', 'posts'));
    }
    public function updatedName(): void
    {
        $this->slug = Str::slug($this->title);
    }
    public function edit($id): void
    {
        $post = Post::findOrFail($id);
        $this->selected_id = $id;
        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->content = $post->content;
        $this->user_id = $post->user_id;
        $this->post_category_id = $post->post_category_id;
        $this->image = $post->image;
        $this->status = $post->status;
        $this->description = $post->description;
        $this->keyword = $post->keyword;
        $this->updateMode = true;
    }
    public function update(): void
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable',
            'post_category_id' => 'required',
            'user_id' => 'required|integer|exists:users,id',
            'status'  => 'required|in:draft,published',
            'description' => 'required',
            'keyword' => 'required',
        ]);
        $post = Post::findOrFail($this->selected_id);
        if ($this->image instanceof TemporaryUploadedFile && $this->image->isValid()) {
            // Delete the old image from the storage
            if ($post->image) {
                Storage::delete('public/' . $post->image);
            }
            $imagePath = $this->image->store('product_images', 'public');
            $post->image = $imagePath;
        }
        $this->slug = Str::slug($this->title, '-');
        $post->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'status' => $this->status,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'post_category_id' => $this->post_category_id,
            'keyword' => $this->keyword,
        ]);
        if (isset($imagePath)) {
            $post->update(['image' => $imagePath]);
        }
        $this->updatedName();
        $this->updateMode = false;
        $this->reset();
        session()->flash('success', 'Post Updated successfully.');
        $this->redirect('/posts', navigate: true);
    }

    public function confirmDelete($id): void
    {
        $this->selected_id = $id;
        $this->confirmingDelete = true;
        $this->postToDelete = Post::find($id);
    }

    public function destroy($id): void
    {
        $product = Post::findOrFail($id);
        $product->delete();
        $this->confirmingDelete = false;
        session()->flash('success', 'Product Deleted successfully.');
        $this->redirect('/posts', navigate: true);
    }
}
