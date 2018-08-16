<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opportunity;

class OpportunityController extends Controller
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
        $opportunities = Opportunity::orderBy('created_at', 'des')->paginate(10);
        return view('opportunities.index')->with('opportunities', $opportunities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('opportunities.create');
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
            'name' => 'required',
            'center' => 'required',
        ]);

        $opportunity = new Opportunity;
        $opportunity->name = $request->input('name');
        $opportunity->center = $request->input('center');
        $opportunity->user_id = auth()->user()->id;
        $opportunity->save();
        
        return redirect('/opportunities')->with('success', 'Opportunity Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opp = Opportunity::find($id);
        return view('opportunities.show')->with('opp', $opp);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opp = Opportunity::find($id);

        if(auth()->user()->id !== $opp->user_id) {
            return redirect('opportunities')->with('error', 'Unauthorized page');
        }

        return view('opportunities.edit')->with('opp', $opp);
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
            'name' => 'required',
            'center' => 'required',
        ]);

        $opportunity = Opportunity::find($id);
        $opportunity->name = $request->input('name');
        $opportunity->center = $request->input('center');
        $opportunity->user_id = auth()->user()->id;
        $opportunity->save();
        
        return redirect('/opportunities')->with('success', 'Opportunity Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opp = Opportunity::find($id);

        if(auth()->user()->id !== $opp->user_id) {
            return redirect('opportunities')->with('error', 'Unauthorized page');
        }

        $opp->delete();

        return redirect('/opportunities')->with('success', 'Opportunity Deleted!');
    }
}
