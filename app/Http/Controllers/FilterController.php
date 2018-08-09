<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;

class FilterController extends Controller
{
   
  public function filter(){
        $searchkey = \Request::get('title');
        $volunteers =  Volunteer::where('AppStatus', 'like', '' .$searchkey. '')->orderBy('id')->paginate(5);
        return view('volunteers/search', ['volunteers' => $volunteers]);
    }
}