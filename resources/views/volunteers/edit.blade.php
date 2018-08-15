@extends('layouts.app')

@section('content')
    <h1>Edit Volunteer</h1>
    <p>Please enter information for updating thjis volunteer</p>
    {!! Form::open(['action' => ['VolunteersController@update', $vol->id], 'method' => 'POST']) !!}
        <form>
            <div class="form-row">
                {!! Form::label('firstName', 'First Name', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('firstName', $vol->firstName, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('lastName', 'Last Name', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('lastName', $vol->lastName, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('userName', 'Username', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('userName', $vol->userName, ['class' => 'form-control', 'placeholder' => 'User Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('password', 'Password', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('password', $vol->password, ['class' => 'form-control', 'placeholder' => 'Password'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('status', 'Status', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {!!  Form::select('status', ['Inactive' => 'Inactive', 'Approved' => 'Approved', 'Pending Approval' => 'Pending Approval', 'Disapproved' => 'Disapproved'],  $vol->status, ['class' => 'form-control' ]) !!}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('location', 'Perferred Center', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('location', $vol->location, ['class' => 'form-control', 'placeholder' => 'Perferred Center'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('availability', 'Availability', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('availability', $vol->availability, ['class' => 'form-control', 'placeholder' => 'Availability'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('address', 'Home Address', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('address', $vol->address, ['class' => 'form-control', 'placeholder' => 'Address Line 1'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-2">
                </div>
                <div class="col col-md-3">
                    {{Form::text('address2', $vol->address2, ['class' => 'form-control', 'placeholder' => 'Address Line 2'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-2">
                </div>
                <div class="col col-md-3">
                    {{Form::text('city', $vol->city, ['class' => 'form-control', 'placeholder' => 'City'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-2">
                </div>
                <div class="col col-md-3">
                    {{Form::text('state', $vol->state, ['class' => 'form-control', 'placeholder' => 'State'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-2">
                </div>
                <div class="col col-md-3">
                    {{Form::text('zip', $vol->zip, ['class' => 'form-control', 'placeholder' => 'Zip'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('homePhone', 'Home Phone', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('homePhone', $vol->homePhone, ['class' => 'form-control', 'placeholder' => 'Home Phone'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('cellPhone', 'Cell Number', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('cellPhone', $vol->cellPhone, ['class' => 'form-control', 'placeholder' => 'Cell Phone'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('education', 'Education', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {!!  Form::select('education', ['Some High School' => 'Some High School', 'High School Grad' => 'High School Grad', 'Some College' => 'Some College', 'In College' => 'In College', 'College Grad' => 'College Grad', 'Grad Student' => 'Grad Student', 'Masters or Higher' => 'Masters or Higher'],  $vol->education, ['class' => 'form-control' ]) !!}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('licenses', 'Professional Licenses', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('licenses', $vol->licenses, ['class' => 'form-control', 'placeholder' => 'Licenses'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('ecName', 'Emergency Contact Name', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('ecName', $vol->ecName, ['class' => 'form-control', 'placeholder' => 'Emergency Contact Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('ecPhone', 'Emergency Contact Phone', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('ecPhone', $vol->ecPhone, ['class' => 'form-control', 'placeholder' => 'Emergency Contact Phone Number'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
            {!! Form::label('ecEmail', 'Emergency Contact Email', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('ecEmail', $vol->ecEmail, ['class' => 'form-control', 'placeholder' => 'Emergency Contact Email'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
            {!! Form::label('ecAddress', 'Emergency Contact Address', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('ecAddress', $vol->ecAddress, ['class' => 'form-control', 'placeholder' => 'Emergancy Contact Address'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
            {!! Form::label('copyLicense', 'Do we have a copy of license?', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {!!  Form::select('copyLicense', ['0' => 'No', '1' => 'Yes'],  $vol->copyLicense, ['class' => 'form-control' ]) !!}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
            {!! Form::label('copySS', 'Do we have a copy of SS?', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {!!  Form::select('copySS', ['0' => 'No', '1' => 'Yes'],  $vol->copySS, ['class' => 'form-control' ]) !!}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                    {!! Form::label('skills', 'Skills', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-5">
                    {{Form::textarea('skills', $vol->skills, ['class' => 'form-control', 'rows' => 8, 'cols' => 5, 'placeholder' => 'Skills'])}}
                </div>
            </div>
            <div style="padding-top: 10px">
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                <a href="{{ URL::previous() }}" class="btn btn-secondary">Go Back</a>
            </div>
        </form>
    {!! Form::close() !!}
@endsection