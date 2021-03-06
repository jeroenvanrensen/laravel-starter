<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class DeleteAccount extends Component
{
    public string $password = '';

    public bool $showModal = false;

    public function render()
    {
        return view('profile.delete-account');
    }

    public function delete()
    {
        if(!Hash::check($this->password, auth()->user()->password)) {
            return $this->addError('password', 'The given password is incorrect.');
        }

        $this->showModal = true;
    }

    public function destroy()
    {
        $user = auth()->user();

        if(!Hash::check($this->password, $user->password)) {
            return $this->addError('password', 'The given password is incorrect.');
        }

        $user->delete();

        return redirect()->to('/');
    }
}
