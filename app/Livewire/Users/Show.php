<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class Show extends Component
{
    public User $user;
    public function render()
    {
        return view('livewire.users.show')->title('User : '. $this->user->name);
    }
}
