<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class PersonalInfo extends Component
{
    public string $name = '';

    public string $email = '';

    public function mount()
    {
        $user = auth()->user();

        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('profile.personal-info');
    }

    public function update()
    {
        $attributes = $this->validate();

        if($this->emailChanged()) {
            $attributes['email_verified_at'] = null;
        }

        auth()->user()->update($attributes);

        session()->flash('success', 'Saved.');
    }

    protected function emailChanged()
    {
        return $this->email != auth()->user()->email;
    }

    public function updated($attribute)
    {
        $this->validateOnly($attribute);
    }

    protected function getRules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . auth()->id()]
        ];
    }
}
