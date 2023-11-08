<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    #[Rule(['required'])]
    public string $body = '';

    public function save()
    {
        $user = Auth::user();
        $post = $user->post()->create($this->validate());

        flash('New data has successfully created', 'success');

        $this->reset();

        $this->dispatch('post-created', $post->id);
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}
