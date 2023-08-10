<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class AdminAddRegisterUserComponent extends Component
{
    public $name;
    public $email;
    public $password;

    public function mount()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:255',
        ]);
    }
    
    public function storeUser()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();
        session()->flash('message','User has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-register-user-component')->layout('layouts.base');
    }
}
