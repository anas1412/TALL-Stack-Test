<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserSearch extends Component
{
    public $search = '';

    public function refreshSearch()
    {
        // This can be left empty or you can add additional logic if needed.
        // Livewire will automatically re-run the render method and fetch the updated results.
    }

    public function render()
    {
        // Initially set $users to an empty array when the page is loaded
        $users = [];

        // If the search input is not empty, perform the search
        if ($this->search !== '') {
            $users = User::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->get();
        }

        return view('livewire.user-search', ['users' => $users]);
    }
}
