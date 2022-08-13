<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $deleteId, $editId, $role, $name;

    protected $rules = [
        'name' => 'required',
    ];

    public function clear(){
        $this->reset('name');
    }

    public function addRole(){
        $this->validate();
        Role::create([
            'name' => $this->name
        ]);
        $this->reset('name');
        $this->dispatchBrowserEvent('added');
    }

    public function editId(Role $role)
    {
        $this->role = $role;
        $this->name = $role->name;

    }

    public function editRole(){
        $this->validate();

        $this->role->update([
            'name' => $this->name
        ]);
        $this->reset('name');
        $this->dispatchBrowserEvent('edited');

    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        Role::destroy($this->deleteId);
        $this->dispatchBrowserEvent('deleted');
    }


    public function render()
    {
        $roles = Role::latest()->paginate(20);
        return view('livewire.admin.roles', compact('roles'));
    }
}
