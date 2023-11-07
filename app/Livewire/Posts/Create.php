<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    #[Rule(['required', 'min:3', 'string'])]
    public string $title ='';

    #[Rule(['required'])]
    public string $body ='';

    public function save()
    {
        $user = \App\Models\User::find(1);
        $validated = $this->validate();

        $user->post()->create($validated);

        flash('New data has successfully created', 'success');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}
