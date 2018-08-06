<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageVController extends Controller
{
    public function index()
    {
        $title = 'Volunteers!';
        return view('ManageV.index')->with('title',$title);
    }
}