<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;

class VolunteersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('auth', ['except' => ['index','show']])
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::orderBy('created_at', 'des')->paginate(10);
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
            'password' => 'required',
            'status' => 'required'
        ]);

        $volunteer = new Volunteer;
        $volunteer->firstName = $request->input('firstName');
        $volunteer->lastName = $request->input('lastName');
        $volunteer->userName = $request->input('userName');
        $volunteer->password = $request->input('password');
        $volunteer->user_id = auth()->user()->id;
        $volunteer->status = $request->input('status');
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
        $vol = Volunteer::find($id);
        return view('volunteers.show')->with('vol', $vol);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vol = Volunteer::find($id);

        if(auth()->user()->id !== $vol->user_id) {
            return redirect('volunteers')->with('error', 'Unauthorized page');
        }

        return view('volunteers.edit')->with('vol', $vol);
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
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'userName' => 'required',
            'password' => 'required'
        ]);

        $volunteer = Volunteer::find($id);
        $volunteer->firstName = $request->input('firstName');
        $volunteer->lastName = $request->input('lastName');
        $volunteer->userName = $request->input('userName');
        $volunteer->password = $request->input('password');
        $volunteer->save();
        
        return redirect('/volunteers')->with('success', 'Volunteer Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vol = Volunteer::find($id);

        if(auth()->user()->id !== $vol->user_id) {
            return redirect('volunteers')->with('error', 'Unauthorized page');
        }

        $vol->delete();

        return redirect('/volunteers')->with('success', 'Volunteer Deleted!');
    }
}
