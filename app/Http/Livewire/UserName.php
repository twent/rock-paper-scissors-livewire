<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class UserName extends Component
{
    public string $userName = '';

    public function mount()
    {
        $this->userName = session('username', '');
    }

    public function updatedUserName()
    {
        session(['username' => $this->userName]);
    }

    public function render(): View
    {
        return view('livewire.user-name');
    }
}
