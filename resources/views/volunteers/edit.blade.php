@extends('layouts.app')

@section('content')
    <h1>Edit</h1>
    {!! Form::open(['action'=>['VolunteerController@update', $volunteer->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('FName','First Name')}}
            {{Form::text('FName',$volunteer->FName,['class'=>'form-control','placeholder'=>'First Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('LName','Last Name')}}
                {{Form::text('LName',$volunteer->LName,['class'=>'form-control','placeholder'=>'Last Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('Username','Username')}}
                {{Form::text('Username',$volunteer->Username,['class'=>'form-control','placeholder'=>'Username'])}}
        </div>
        <div class="form-group">
            {{Form::label('Password','Password')}}
            {{Form::password('Password',['class'=>'form-control','placeholder'=>'Password'])}}
        </div>
        <div class="form-group">
                {{Form::label('WorkCenter','Prefered work center')}}
                {{Form::text('WorkCenter',$volunteer->WorkCenter,['class'=>'form-control','placeholder'=>'Work center'])}}
        </div>
        <div class="form-group">
                {{Form::label('Skills','Skills and Interests')}}
                {{Form::text('Skills',$volunteer->Skills,['class'=>'form-control','placeholder'=>'Skills/Intrests'])}}
        </div>
        <div class="form-group">
                {{Form::label('Avail','Availability times')}}
                {{Form::text('Avail',$volunteer->Avail,['class'=>'form-control','placeholder'=>'Availability'])}}
        </div>
        <div class="form-group">
                {{Form::label('Address','Address')}}
                {{Form::text('Address',$volunteer->Address,['class'=>'form-control','placeholder'=>'Address'])}}
        </div>
        <div class="form-group">
                {{Form::label('HomeNum','Home phone number')}}
                {{Form::number('HomeNum',$volunteer->HomeNum,['class'=>'form-control','placeholder'=>'Home number'])}}
        </div>
        <div class="form-group">
                {{Form::label('WorkNum','Work phone number')}}
                {{Form::number('WorkNum',$volunteer->WorkNum,['class'=>'form-control','placeholder'=>'Work number'])}}
        </div>
        <div class="form-group">
                {{Form::label('CellNum','Cell phone number')}}
                {{Form::number('CellNum',$volunteer->CellNum,['class'=>'form-control','placeholder'=>'Phone number'])}}
        </div>
        <div class="form-group">
                {{Form::label('Email','Email address')}}
                {{Form::email('Email',$volunteer->Email,['class'=>'form-control','placeholder'=>'email'])}}
        </div>
        <div class="form-group">
                {{Form::label('EduBack','Educational Background')}}
                {{Form::text('EduBack',$volunteer->EduBack,['class'=>'form-control','placeholder'=>'Educational Background'])}}
        </div>
        <div class="form-group">
                {{Form::label('Licenses','Current Licenses')}}
                {{Form::text('Licenses',$volunteer->Licenses,['class'=>'form-control','placeholder'=>'Licenses'])}}
        </div>
        <div class="form-group">
                {{Form::label('ERName','Emergency Contact Name')}}
                {{Form::text('ERName',$volunteer->ERName,['class'=>'form-control','placeholder'=>'Emergency Contact Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('ERPhoneNum','Emergency Contact Phone')}}
                {{Form::number('ERPhoneNum',$volunteer->ERPhoneNum,['class'=>'form-control','placeholder'=>'Emergency Contact Phone'])}}
        </div>
        <div class="form-group">
                {{Form::label('EREmail','Emergency Contact Email')}}
                {{Form::email('EREmail',$volunteer->EREmail,['class'=>'form-control','placeholder'=>'Emergency Contact Email'])}}
        </div>
        <div class="form-group">
                {{Form::label('ERAddress','Emergency Contact Address')}}
                {{Form::text('ERAddress',$volunteer->ERAddress,['class'=>'form-control','placeholder'=>'Emergency Contact Address'])}}
        </div>
        <div class="form-group">
                {{Form::label('LicenseCP','Is a copy of volunteer’s drivers license on file?')}}
                {{Form::select('LicenseCP',['Yes'=>'Yes','No'=>'No'],$volunteer->LicenseCP,['placeholder' => ''])}}
        </div>
        <div class="form-group">
                {{Form::label('SSNCP','Is a copy of volunteer’s social security card on file?')}}
                {{Form::select('SSNCP',['Yes'=>'Yes','No'=>'No'],$volunteer->SSNCP,['placeholder' => ''])}}
        </div>
        <div class="form-group">
                {{Form::label('AppStatus','Volunteer’s Approval Status')}}
                {{Form::select('AppStatus',['Approved/Pending Approval'=>'Approved/Pending Approval','Approved'=>'Approved','Pending Approval'=>'Pending Approval','Disapproved'=>'Disapproved','Inactive'=>'Inactive'],$volunteer->AppStatus)}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}   
@endsection