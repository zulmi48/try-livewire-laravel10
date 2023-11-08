<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Posts')]

class Index extends Component
{
    #[On('post-created')]
    public function updatePostList($post)
    {
        //
    }

    public function render()
    {
        // $user = Auth::user();
        $posts = Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', compact('posts'));
    }
}
