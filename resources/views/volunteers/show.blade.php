@extends('layouts.app')

@section('content')
    <h1>Volunteer</h1>
    <div>
        <dl>
            <dt>Volunteer Name</dt>
            <dd>{!!$volunteer->FName!!} {!!$volunteer->LName!!}</dd>
            <dt>Username</dt>
            <dd>{!!$volunteer->Username!!}</dd>
            <dt>Password</dt>
            <dd>{!!$volunteer->Password!!}</dd>
            <dt>Work Center</dt>
            <dd>{!!$volunteer->WorkCenter!!}</dd>
            <dt>Skills/Interests</dt>
            <dd>{!!$volunteer->Skills!!}</dd>
            <dt>Availability times</dt>
            <dd>{!!$volunteer->Avail!!}</dd>
            <dt>Address</dt>
            <dd>{!!$volunteer->Address!!}</dd>
            <dt>Home Number</dt>
            <dd>{!!$volunteer->HomeNum!!}</dd>
            <dt>Work Number</dt>
            <dd>{!!$volunteer->WorkNum!!}</dd>
            <dt>Cell Number</dt>
            <dd>{!!$volunteer->CellNum!!}</dd>
            <dt>Email Address</dt>
            <dd>{!!$volunteer->Email!!}</dd>
            <dt>Education Background</dt>
            <dd>{!!$volunteer->EduBack!!}</dd>
            <dt>Current Licenses</dt>
            <dd>{!!$volunteer->licenses!!}</dd>
            <dt>Emergency Contact Name</dt>
            <dd>{!!$volunteer->ERName!!}</dd>
            <dt>Emergency Contact Phone Number</dt>
            <dd>{!!$volunteer->ERPhoneNum!!}</dd>
            <dt>Emergency Contact Email</dt>
            <dd>{!!$volunteer->EREmail!!}</dd>
            <dt>Emergency Contact Address</dt>
            <dd>{!!$volunteer->ERAddress!!}</dd>
            <dt>Drivers License on File?</dt>
            <dd>{!!$volunteer->LicenseCP!!}</dd>
            <dt>Social Security Number on File?</dt>
            <dd>{!!$volunteer->SSNCP!!}</dd>
            <dt>Approval Status</dt>
            <dd>{!!$volunteer->AppStatus!!}</dd>
          </dl>            
    </div>
    <a href="/volunteers/{{$volunteer->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action'=>['VolunteerController@destroy',$volunteer->id],'method'=>'post','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
    {!!Form::close()!!}
    <a href="/volunteers" class="btn btn-default">Back</a>
@endsection