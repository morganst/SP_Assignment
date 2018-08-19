<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Volunteer;
use App\Opportunity;
class FilterController extends Controller
{
    public function filter(){
            $searchkey = \Request::get('title');
            $volunteers =  Volunteer::where('status', 'like', '' .$searchkey. '')->orderBy('created_at', 'des')->paginate(10);
            return view('volunteers/search', ['volunteers' => $volunteers]);
        }
        public function OppMatches(){
            $searchkey = \Request::get('title');
            $opportunities =  Opportunity::where('center', 'like', '' .$searchkey. '')->orderBy('id')->paginate(10);
            return view('volunteers/matches', ['opportunities' => $opportunities]);
        }
        public function Oppfilter(){
            $searchkey = \Request::get('title');
            $opportunities =  Opportunity::where('center', 'like', '' .$searchkey. '')->orderBy('id')->paginate(10);
           // return view('opportunities/search', ['opportunities' => $opportunities]);
           return view('opportunities/search', ['opportunities' => $opportunities]);
        }
        public function multiFilter(){
            $searchkey = \Request::get('title');
            $volunteers =  Volunteer::where('status', '=', 'Approved')->orWhere('status', '=', 'Pending Approval')->orderBy('created_at', 'des')->paginate(10);
            return view('volunteers/search', ['volunteers' => $volunteers]);
        }

        public function filterAlpha(){
            $searchkey = \Request::get('title');
            $opportunities =  Opportunity::where('center', 'like', '%' .$searchkey. '%')->orderBy('center')->paginate(10);
            return view('opportunities/search', ['opportunities' => $opportunities]);
        }

        public function filterTime(){
            $searchkey = \Request::get('title');
            $opportunities =  Opportunity::where('created_at', 'like', '%' .$searchkey. '%')->orderBy('created_at', 'des')->paginate(10);
            return view('opportunities/search', ['opportunities' => $opportunities]);
        }
}