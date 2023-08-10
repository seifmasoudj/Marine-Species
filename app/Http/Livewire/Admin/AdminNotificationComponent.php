<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\notification;
use Livewire\WithPagination;

class AdminNotificationComponent extends Component
{  
    use WithPagination;
    public $searchTerm;

    public function deleteNotification($id)
    {
        $notification = notification::find($id);
        $notification->delete();
        session()->flash('message','Notification has been deleted successfully!');
    }
    
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $notifications = notification::orderBy('created_at','DESC')->where('text','LIKE',$search)
        ->orwhere('status','LIKE',$search)
        ->orwhere('id','DESC')->paginate(1);
        return view('livewire.admin.admin-notification-component',['notifications'=>$notifications])->layout('layouts.base');
    }
}
