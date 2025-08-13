<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.users.user-index', compact('users'));
    }
}
