<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use App\Models\User;
use App\Models\Contact;
use Livewire\Component;
use App\Models\Document;
use App\Models\Logactivity;
use App\Models\MarineSpecies;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $documents = Document::count();
        $users = User::count();
        $contacts = Contact::count();
        $allSpecies = MarineSpecies::count();
        $speciesHealth = MarineSpecies::where('status','Available')->count();
        $speciesIndanger = MarineSpecies::where('status','Indanger')->count();
        $speciesExi = MarineSpecies::where('status','Extinct')->count();
        $news = News::where('status','active')->count();
        $logactivities = Logactivity::count();
        return view('livewire.admin.admin-dashboard-component',['speciesHealth'=>$speciesHealth,'speciesHealth'=>$speciesHealth,'allSpecies'=>$allSpecies,'documents'=>$documents, 'users'=>$users, 'contacts'=>$contacts,'speciesIndanger'=>$speciesIndanger, 'speciesExi'=>$speciesExi,'news'=>$news, 'logactivities'=>$logactivities])->layout('layouts.base');
    }
}
