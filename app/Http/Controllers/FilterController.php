<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Volunteer;
class FilterController extends Controller
{
   
  public function filter(){
        $searchkey = \Request::get('title');
        $volunteers =  Volunteer::where('status', 'like', '' .$searchkey. '')->orderBy('id')->paginate(10);
        return view('volunteers/search', ['volunteers' => $volunteers]);
    }
    public function multiFilter(){
        $searchkey = \Request::get('title');
        $volunteers =  Volunteer::where('status', '=', 'Approved')->orWhere('status', '=', 'Pending Approval')->orderBy('id')->paginate(5);
        return view('volunteers/search', ['volunteers' => $volunteers]);
    }
}