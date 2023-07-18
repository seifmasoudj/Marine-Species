<?php

namespace App\Http\Livewire\Admin;

use PDF;
use Livewire\Component;
use App\Models\MarineSpecies;

class AdminPDFComponent extends Component
{
    public function generatePDF()
    {
        $species = MarineSpecies::get();
  
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'species' => $species
        ]; 
            
        $pdf = PDF::loadView('admin-species', $data);
     
        return $pdf->download('species.pdf');
    }
    public function render()
    {
        return view('livewire.admin.admin-p-d-f-component');
    }
}
