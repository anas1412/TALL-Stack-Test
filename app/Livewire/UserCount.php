<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserCount extends Component
{

    public function getCounter()
    {
        return User::count();
    }

    public function render()
    {
        return view('livewire.user-count');
    }
}
