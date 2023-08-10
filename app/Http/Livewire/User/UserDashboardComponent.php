<?php

namespace App\Http\Livewire\User;

use App\Models\News;
use App\Models\User;
use App\Models\Contact;
use Livewire\Component;
use App\Models\Document;
use App\Models\Taxonomy;
use App\Models\MarineSpecies;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $documents = Document::count();
        $users = User::count();
        $taxonomy = Taxonomy::count();
        $contacts = Contact::count();
        $allSpecies = MarineSpecies::count();
        $speciesHealth = MarineSpecies::where('status','Available')->count();
        $speciesIndanger = MarineSpecies::where('status','Indanger')->count();
        $speciesExi = MarineSpecies::where('status','Extinct')->count();
        $news = News::where('status','active')->count();
        return view('livewire.user.user-dashboard-component',['contacts'=>$contacts,'speciesHealth'=>$speciesHealth,'allSpecies'=>$allSpecies,'documents'=>$documents, 'users'=>$users, 'taxonomy'=>$taxonomy,'speciesIndanger'=>$speciesIndanger, 'speciesExi'=>$speciesExi,'news'=>$news,])->layout('layouts.base');
    }
}
