<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Component;

class RequestPasswordLink extends Component
{
    public string $email = '';

    public function render()
    {
        return view('auth.request-password-link')
            ->layout('layouts.app', ['title' => 'Forgot Password']);
    }

    public function request()
    {
        $attributes = $this->validate([
            'email' => ['required', 'email', 'max:255', 'exists:users']
        ]);

        $status = Password::sendResetLink($attributes);

        $status == Password::RESET_LINK_SENT
            ? session()->flash('success', 'We have emailed your password reset link!')
            : session()->flash('error', 'Please wait before retrying.');
    }
}
