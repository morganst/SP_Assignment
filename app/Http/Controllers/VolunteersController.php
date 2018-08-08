<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::orderBy('created_at', 'asc')->paginate(10);
        return view('volunteers.index')->with('volunteers', $volunteers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'userName' => 'required',
            'password' => 'required'
        ]);

        $volunteer = new Volunteer;
        $volunteer->firstName = $request->input('firstName');
        $volunteer->lastName = $request->input('lastName');
        $volunteer->userName = $request->input('userName');
        $volunteer->password = $request->input('password');
        $volunteer->save();
        
        return redirect('/volunteers')->with('success', 'Volunteer Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vols = Volunteer::find($id);
        return view('Volunteers.show')->with('vols', $vols);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
