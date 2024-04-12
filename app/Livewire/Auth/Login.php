<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\Auth\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\View\View;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;


    public function login(): void
    {
        if ($this->form->login()) {
            $this->redirect(RouteServiceProvider::HOME);
        }

        session()->flash('error', __('Incorrect email or password'));
    }

    public function render(): View
    {
        return view('livewire.auth.login');
    }
}
