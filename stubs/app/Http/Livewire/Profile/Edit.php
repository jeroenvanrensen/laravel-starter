<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('profile.edit')
            ->layout('layouts.app', ['title' => 'My Profile']);
    }
}
