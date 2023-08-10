<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminRegisterUserComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteCategory($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('message','User has been deleted successfully!');
    }
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $users = User::orderBy('created_at','DESC')->where('name','LIKE',$search)
        ->orwhere('id','DESC')->paginate(5);
        return view('livewire.admin.admin-register-user-component',['users'=>$users])->layout('layouts.base');
    }
}
