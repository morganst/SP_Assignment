@extends('layouts.app')

@section('content')
    <h2>{{$vol->firstName}} {{$vol->lastName}}</h2>
    <div class="">Here is where you put information about the volunteer pulled from db</div>
    
    @if(Auth::user()->id == $vol->user_id) 
        <div class="text-right">
            <a href="/volunteers/{{$vol->id}}/edit" class="btn btn-secondary" style="color: #F2F2F2" role="button">Edit</a>
            {!!Form::open(['action' => ['VolunteersController@destroy', $vol->id], 'method' => 'POST', 'class' => 'btn btn-danger', 'style' => 'padding: 0'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger', 'role' => 'button'])}}
            {!!Form::close()!!}
        </div>
    @endif
    
        <hr>
        <div>First Name: {{$vol->firstName}}</div>
        <div>Last Name: {{$vol->lastName}}</div>
        <div>username: {{$vol->username}}</div>
        <div>status: {{$vol->status}}</div>
        <div>Center Applied For: {{$vol->location}}</div>
        <div>Skills: {{$vol->skills}}</div>
        <div>Availability: {{$vol->availability}}</div>
        <div>Home Phone: {{$vol->homePhone}}</div>
        <div>Cell Phone: {{$vol->cellPhone}}</div>
        <div>Education: {{$vol->education}}</div>
        <div>Licenses: {{$vol->licenses}}</div>
        <div>Emergency Contact Name: {{$vol->ecName}}</div>
        <div>Emergency Contact Phone: {{$vol->ecPhone}}</div>
        <div>Emergency Contact Email: {{$vol->ecEmail}}</div>
        <div>Emergency Contact Address: {{$vol->ecAddress}}</div>
        <div>Have Copy of License: {{$vol->copyLicense}}</div>
        <div>Have Copy of SS: {{$vol->copySS}}</div>
    </hr>
    <hr>
<small>Created: {{$vol->created_at}} Created by: {{$vol->user->name}}</small>
        <div class="text-right">
            <a href="{{ URL::previous() }}" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
        </div>
    </hr>
@endsection