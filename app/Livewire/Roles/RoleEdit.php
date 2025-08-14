<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleEdit extends Component
{

    public $name, $role;
    public $allPermissions = [];
    public $permissions = [];

    public function mount($id)
    {
        $this->role = Role::findOrFail($id);
        $this->allPermissions = Permission::get();
        $this->name = $this->role->name;
        $this->permissions = $this->role->permissions->pluck('name');
    }

    public function render()
    {
        return view('livewire.roles.role-edit');
    }

}
