<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminEditRegisterUserComponent extends Component
{
    public $name;
    public $email;
    public $utype;
    public $user_id;

    public function mount($user_id)
    {
        $users = User::find($user_id);
        $this->name = $users->name;
        $this->email = $users->email;
        $this->utype = $users->utype;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'utype' => 'required|max:255',
        ]);
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'utype' => 'required|max:255',
        ]);

        $users = User::find($this->user_id);
        $users->name = $this->name;
        $users->email = $this->email;
        $users->utype = $this->utype;
        $users->save();
        session()->flash('message','User has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-register-user-component')->layout('layouts.base');
    }
}
