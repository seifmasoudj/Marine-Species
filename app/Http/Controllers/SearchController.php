<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MarineSpecies;

class SearchController extends Controller
{
    public function autocomplete(Request $req) 
    {
        $data = MarineSpecies::select('regularName')->where("regularName","LIKE","%{$req->input('query')}%")->get(); 
        return response()->json($data);
    }

    public function searchService(Request $req)
    {
        $regularName = Str::regularName($req->q,'-');    
        if($regularName)
        {
            return redirect('/species/'.$regularName);
        }
        else
        {
            return back();;
        }
    }
}
