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

    public function matches($id)
    {
        $vol = Volunteer::find($id);
        return view('pages.matches')->with('vol', $vol);
    }

}