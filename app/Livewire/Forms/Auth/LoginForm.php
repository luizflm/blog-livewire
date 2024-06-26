<?php

namespace App\Livewire\Forms\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required|email')]
    public ?string $email = '';

    #[Validate('required|min:3')]
    public ?string $password = '';

    public function login(): bool
    {
        $this->validate();

        if (Auth::attempt($this->all())) {
            request()->session()->regenerate();
            return true;
        }

        return false;
    }
}
