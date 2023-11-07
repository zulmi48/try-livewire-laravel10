<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;

class Login extends Component
{
    #[Layout('layouts.guest')]

    #[Rule('required|email')]
    public $email ='';
    #[Rule('required')]
    public $password ='';

    public function login()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function render()
    {
        return view('livewire.login');
    }
}
