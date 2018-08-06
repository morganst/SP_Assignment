@extends('layouts.app')

@section('content')
    <h1>Edit</h1>
    {!! Form::open(['action'=>['VolunteerController@update', $volunteer->id],'method'=>'POST']) !!}
    <div class="form-group">
            {{Form::label('FName','First Name')}}
            {{Form::text('FName','',['class'=>'form-control','placeholder'=>'First Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('LName','Body')}}
                {{Form::text('LName','',['class'=>'form-control','placeholder'=>'Body'])}}
        </div>
        <div class="form-group">
                {{Form::label('Username','Title')}}
                {{Form::text('Username','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('Password','Title')}}
            {{Form::text('Password','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('WorkCenter','Title')}}
                {{Form::text('WorkCenter','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('Skills','Title')}}
                {{Form::text('Skills','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('Avail','Title')}}
                {{Form::text('Avail','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('Address','Title')}}
                {{Form::text('Address','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('HomeNum','Title')}}
                {{Form::text('HomeNum','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('WorkNum','Title')}}
                {{Form::text('WorkNum','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('CellNum','Title')}}
                {{Form::text('CellNum','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('Email','Title')}}
                {{Form::text('Email','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('EduBack','Title')}}
                {{Form::text('EduBack','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('Licenses','Title')}}
                {{Form::text('Licenses','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('ERName','Title')}}
                {{Form::text('ERName','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('ERPhoneNum','Title')}}
                {{Form::text('ERPhoneNum','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('EREmail','Title')}}
                {{Form::text('EREmail','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('ERAddress','Title')}}
                {{Form::text('ERAddress','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('LicenseCP','Title')}}
                {{Form::text('LicenseCP','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('SSNCP','Title')}}
                {{Form::text('SSNCP','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('AppStatus','Title')}}
                {{Form::text('AppStatus','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}   
@endsection