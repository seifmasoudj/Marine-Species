<?php
  
namespace App\Http\Controllers;

use App\Models\MarineSpecies;
use DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
    
class ChartJSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index() : View
    {
        $users = MarineSpecies::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');
 
        $labels = $users->keys();
        $data = $users->values();
              
        return view('chart', compact('labels', 'data'));
    }
}