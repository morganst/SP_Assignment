<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Volunteer;
use App\Opportunity;
class SearchController extends Controller
{
    public function search(){
        $searchkey = \Request::get('title');
        $volunteers =  Volunteer::where('firstName', 'like', '' .$searchkey. '%')->orderBy('created_at', 'des')->paginate(10);
        return view('volunteers/search', ['volunteers' => $volunteers]);
    }

    public function searchOpp(){
        $searchkey = \Request::get('title');
        $opportunities =  Opportunity::where('name', 'like', '' .$searchkey. '%')->orderBy('created_at', 'des')->paginate(10);
        return view('opportunities/search', ['opportunities' => $opportunities]);
    }
}