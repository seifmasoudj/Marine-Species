<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PDF;

class CategoryPDF extends Controller
{
    public function categoryPDF()
    {
        $category = Category::get();

        $data = [
            'categories' => $category
        ];

        $pdf = PDF::loadView('categoryPDF', $data);

        return $pdf->stream('Category.pdf');
    }
}
