<?php

namespace App\Http\Livewire\Admin;

use App\Models\Document;
use App\Models\Logactivity;
use App\Models\MarineSpecies;
use App\Models\News;
use App\Models\Taxonomy;
use App\Models\User;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $documents = Document::where('status','delivered')->count();
        $users = User::count();
        $taxonomy = Taxonomy::count();
        $species = MarineSpecies::where('status','health')->count();
        $speciesIndenger = MarineSpecies::where('status','Indenger')->count();
        $speciesExi = MarineSpecies::where('status','Exihibit')->count();
        $news = News::where('status','active')->count();
        $logactivities = Logactivity::count();
        return view('livewire.admin.admin-dashboard-component',['documents'=>$documents, 'users'=>$users, 'taxonomy'=>$taxonomy, 'species'=>$species,'speciesIndenger'=>$speciesIndenger, 'speciesExi'=>$speciesExi,'news'=>$news, 'logactivities'=>$logactivities])->layout('layouts.base');
    }
}
