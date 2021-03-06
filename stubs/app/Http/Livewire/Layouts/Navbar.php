<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class Navbar extends Component
{
    public $title;

    public function render()
    {
        return view('layouts.navbar');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
