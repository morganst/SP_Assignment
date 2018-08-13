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
            &nbsp;
            <div class="form-row">
                    {!! Form::label('status', 'Status', ['class' => 'col-lg-2 control-label'] )  !!}
                    <div class="col col-md-2">
                        {!!  Form::select('status', ['Active' => 'Active', 'Inactive' => 'Inactive', 'Approved' => 'Approved', 'Pending Approval' => 'Pending Approval', 'Disapproved' => 'Disapproved'],  'Pending Approval', ['class' => 'form-control' ]) !!}
                    </div>
            </div>
            &nbsp;
            <div class="form-row">
                <div class="col col-md-2">
                    {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Center to Work'])}}
                </div>
                <div class="col col-md-2">
                    {{Form::text('skills', '', ['class' => 'form-control', 'placeholder' => 'Skills'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                <div class="col col-md-2">
                    {{Form::text('availability', '', ['class' => 'form-control', 'placeholder' => 'Availability'])}}
                </div>
                <div class="col col-md-2">
                    {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                <div class="col col-md-2">
                    {{Form::text('homePhone', '', ['class' => 'form-control', 'placeholder' => 'Home Phone'])}}
                </div>
                <div class="col col-md-2">
                    {{Form::text('cellPhone', '', ['class' => 'form-control', 'placeholder' => 'Cell Phone'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                <div class="col col-md-2">
                    {{Form::text('education', '', ['class' => 'form-control', 'placeholder' => 'Education'])}}
                </div>
                <div class="col col-md-2">
                    {{Form::text('licenses', '', ['class' => 'form-control', 'placeholder' => 'Licenses'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                <div class="col col-md-2">
                    {{Form::text('ecName', '', ['class' => 'form-control', 'placeholder' => 'Emergency Contact Name'])}}
                </div>
                <div class="col col-md-2">
                    {{Form::text('ecPhone', '', ['class' => 'form-control', 'placeholder' => 'Emergency Contact Phone Number'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                <div class="col col-md-2">
                    {{Form::text('ecEmail', '', ['class' => 'form-control', 'placeholder' => 'Emergency Contact Email'])}}
                </div>
                <div class="col col-md-2">
                    {{Form::text('ecAddress', '', ['class' => 'form-control', 'placeholder' => 'Emergancy Contact Address'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                <div class="col col-md-2">
                    {{Form::text('copyLicense', '', ['class' => 'form-control', 'placeholder' => 'Copy of License'])}}
                </div>
                <div class="col col-md-2">
                    {{Form::text('copySS', '', ['class' => 'form-control', 'placeholder' => 'Copy of SS Card'])}}
                </div>
            </div>
            <div style="padding-top: 10px">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                <a class="btn btn-secondary" href="/volunteers" role="button">Back</a>
            </div>
        </form>
    {!! Form::close() !!}
@endsection