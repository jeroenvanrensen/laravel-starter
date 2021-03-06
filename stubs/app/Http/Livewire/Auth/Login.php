<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';

    public string $password = '';

    public bool $rememberMe = false;

    public function render()
    {
        return view('auth.login')
            ->layout('layouts.app', ['title' => 'Login']);
    }

    public function login()
    {
        $success = auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->rememberMe);

        if ($success) {
            return redirect()->to(RouteServiceProvider::HOME);
        }

        $this->addError('email', 'These credentials do not match our records.');
        $this->reset('password');
    }
}
