<?php

namespace App\Http\Livewire\Admin;

use App\Models\School;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $deleteId, $editId, $user, $name, $phone, $email, $password, $role;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        // 'password' => 'required',
        // 'school' => 'required',
        'role' => 'required',
    ];

    public function clear()
    {
        $this->reset('name', 'phone', 'email', 'password', 'role', 'deleteId');
    }

    public function addUser()
    {
        // dd($this->school);
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            // 'user_school' => $this->school,
        ]);

        $user->assignRole($this->role);

        $this->reset('name', 'phone', 'email', 'password', 'role');
        $this->dispatchBrowserEvent('added');
    }

    public function editId(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->email = $user->email;
        $this->role = $user->getRoleNames();
    }

    public function editUser()
    {
        $this->validate();
        if ($this->password) {
            $this->user->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'password' => Hash::make($this->password),
            ]);

        } else {
            $this->user->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);

        }

        $this->user->syncRoles($this->role);


        $this->dispatchBrowserEvent('edited');

    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        User::destroy($this->deleteId);
        $this->dispatchBrowserEvent('deleted');
    }

    public function render()
    {
        $users = User::latest()->paginate(25);
        $roles = Role::latest()->get();
        return view('livewire.admin.users', compact('users', 'roles'));
    }
}
