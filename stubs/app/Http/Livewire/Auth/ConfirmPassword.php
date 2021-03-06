<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ConfirmPassword extends Component
{
    public string $password = '';

    public function render()
    {
        return view('auth.confirm-password')
            ->layout('layouts.app', ['title' => 'Confirm Password']);
    }

    public function confirm()
    {
        if (!$this->passwordIsCorrect()) {
            return $this->addError('password', 'The provided password is incorrect.');
        }

        session()->passwordConfirmed();

        return redirect()->intended();
    }

    protected function passwordIsCorrect(): bool
    {
        return Hash::check($this->password, auth()->user()->password);
    }
}
