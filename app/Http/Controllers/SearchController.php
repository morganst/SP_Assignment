<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Volunteer;
class SearchController extends Controller
{
   
  public function search(){
        $searchkey = \Request::get('title');
        $volunteers =  Volunteer::where('firstName', 'like', '' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('volunteers/search', ['volunteers' => $volunteers]);
    }
}