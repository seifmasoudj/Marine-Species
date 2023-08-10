<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class TaxonomyPDF extends Controller
{
    public function taxonomyPDF()
    {
        $taxonomy = Taxonomy::get();

        $data = [
            'taxonomies' => $taxonomy
        ];

        $pdf = PDF::loadView('taxonomyPDF', $data);

        return $pdf->stream('Taxonomy.pdf');
    }
}
