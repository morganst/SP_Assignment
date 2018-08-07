<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;

class VolunteerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::orderBy('created_at','desc')->paginate(5);
        return view('volunteers.index')->with('volunteers',$volunteers);
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
        $this->validate($request,[
            'FName' => 'required',
            'LName' => 'required',
            'Username' => 'required',
            'Password' => 'required',
            'WorkCenter' => 'required',
            'Skills' => 'required',
            'Avail' => 'required',
            'Address' => 'required',
            'HomeNum' => 'required_without_all:WorkNum,CellNum',
            'WorkNum' => 'required_without_all:HomeNum,CellNum',
            'CellNum' => 'required_without_all:HomeNum,WorkNum',
            'Email' => 'required',
            'EduBack' => 'required',
            'Licenses' => 'required',
            'ERName' => 'required',
            'ERPhoneNum' => 'required',
            'EREmail' => 'required',
            'ERAddress' => 'required',
            'LicenseCP' => 'required',
            'SSNCP' => 'required',
            'AppStatus' => 'required',
        ]);

        $volunteer = new Volunteer;
        $volunteer->FName = $request->input('FName');
        $volunteer->LName = $request->input('LName');
        $volunteer->Username = $request->input('Username');
        $volunteer->Password = $request->input('Password');
        $volunteer->WorkCenter = $request->input('WorkCenter');
        $volunteer->Skills = $request->input('Skills');
        $volunteer->Avail = $request->input('Avail');
        $volunteer->Address = $request->input('Address');
        $volunteer->HomeNum = $request->input('HomeNum');
        $volunteer->WorkNum = $request->input('WorkNum');
        $volunteer->CellNum = $request->input('CellNum');
        $volunteer->Email = $request->input('Email');
        $volunteer->EduBack = $request->input('EduBack');
        $volunteer->Licenses = $request->input('Licenses');
        $volunteer->ERName = $request->input('ERName');
        $volunteer->ERPhoneNum = $request->input('ERPhoneNum');
        $volunteer->EREmail = $request->input('EREmail');
        $volunteer->ERAddress = $request->input('ERAddress');
        $volunteer->LicenseCP = $request->input('LicenseCP');
        $volunteer->SSNCP = $request->input('SSNCP');
        $volunteer->AppStatus = $request->input('AppStatus');
        //$volunteer->user_id = auth()->user()->id;
        $volunteer->save();

        return redirect('/volunteers')->with('success', 'Volunteer Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $volunteer = Volunteer::find($id);
        return view('volunteers.show')->with('volunteer', $volunteer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteer::find($id);

        return view('volunteers.edit')->with('volunteer', $volunteer);
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
        $this->validate($request,[
            'FName' => 'required',
            'LName' => 'required',
            'Username' => 'required',
            'Password' => 'required',
            'WorkCenter' => 'required',
            'Skills' => 'required',
            'Avail' => 'required',
            'Address' => 'required',
            'HomeNum' => 'required_without_all:WorkNum,CellNum',
            'WorkNum' => 'required_without_all:HomeNum,CellNum',
            'CellNum' => 'required_without_all:HomeNum,WorkNum',
            'Email' => 'required',
            'EduBack' => 'required',
            'Licenses' => 'required',
            'ERName' => 'required',
            'ERPhoneNum' => 'required',
            'EREmail' => 'required',
            'ERAddress' => 'required',
            'LicenseCP' => 'required',
            'SSNCP' => 'required',
            'AppStatus' => 'required',
        ]);

        $volunteer = Volunteer::find($id);
        $volunteer->FName = $request->input('FName');
        $volunteer->LName = $request->input('LName');
        $volunteer->Username = $request->input('Username');
        $volunteer->Password = $request->input('Password');
        $volunteer->WorkCenter = $request->input('WorkCenter');
        $volunteer->Skills = $request->input('Skills');
        $volunteer->Avail = $request->input('Avail');
        $volunteer->Address = $request->input('Address');
        $volunteer->HomeNum = $request->input('HomeNum');
        $volunteer->WorkNum = $request->input('WorkNum');
        $volunteer->CellNum = $request->input('CellNum');
        $volunteer->Email = $request->input('Email');
        $volunteer->EduBack = $request->input('EduBack');
        $volunteer->Licenses = $request->input('Licenses');
        $volunteer->ERName = $request->input('ERName');
        $volunteer->ERPhoneNum = $request->input('ERPhoneNum');
        $volunteer->EREmail = $request->input('EREmail');
        $volunteer->ERAddress = $request->input('ERAddress');
        $volunteer->LicenseCP = $request->input('LicenseCP');
        $volunteer->SSNCP = $request->input('SSNCP');
        $volunteer->AppStatus = $request->input('AppStatus');
        $volunteer->save();

        return redirect('/volunteers')->with('success', 'Volunteer Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $volunteer = Volunteer::find($id);
        $volunteer->delete();

        return redirect('/volunteers')->with('success', 'Volunteer Deleted');
    }
}
