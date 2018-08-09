@extends('layouts.app')

@section('content')
    <h1>New Volunteer</h1>
    <p>Please enter information for creating a new volunteer</p>
    {!! Form::open(['action' => 'VolunteersController@store', 'method' => 'POST']) !!}
        <form>
            <div class="form-row">
                <div class="col col-md-2">
                        {{Form::text('firstName', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                </div>
                <div class="col col-md-2">
                        {{Form::text('lastName', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                <div class="col col-md-2">
                    {{Form::text('userName', '', ['class' => 'form-control', 'placeholder' => 'User Name'])}}
                </div>
                <div class="col col-md-2">
                    {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                </div>
            </div>
            <div style="padding-top: 10px">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                <a class="btn btn-secondary" href="/volunteers" role="button">Back</a>
            </div>
        </form>
    {!! Form::close() !!}
@endsection