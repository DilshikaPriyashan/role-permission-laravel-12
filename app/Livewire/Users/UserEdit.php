<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{

    public $name, $email, $password, $confirm_password;

    public function render()
    {
        return view('livewire.users.user-edit');
    }

    public function mount($id)
    {
        $user = User::findOrFail($id);
        $this->name = $user->name;
        $this->email = $user->email;
    }
}
