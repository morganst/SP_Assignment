<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;

class PagesController extends Controller
{
    public function index() {
        $title = "Volunteer Page";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function show($id)
    {
        $vol = Volunteer::find($id);
        return view('pages.matches')->with('vol', $vol);
    }
    public function matches($id)
    {
        
        $vol = Volunteer::find($id);

        
        return view('pages.matches')->with('vol', $vol);
    }

}