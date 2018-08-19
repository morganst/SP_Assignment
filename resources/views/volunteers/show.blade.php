@extends('layouts.app')

@section('content')
    <h2>{{$vol->firstName}} {{$vol->lastName}}</h2>
    <div class="">Volunteers information:</div>

    @if(Auth::user()->id == $vol->user_id)
        <div class="text-right">
            

            @if($vol->location == 'Main Campus')
            <a href="/Opp2filter?title=Main Campus"class="btn btn-secondary" style="color: #F2F2F2" role="button">Matches</a></h2>
            @endif
            @if($vol->location == 'Animal Shelter')
            <a href="/Opp2filter?title=Main Campus"class="btn btn-secondary" style="color: #F2F2F2" role="button">Matches</a></h2>
            @endif
            @if($vol->location == 'Homeless Shelter')
            <a href="/Opp2filter?title=Homeless Shelter"class="btn btn-secondary" style="color: #F2F2F2" role="button">Matches</a></h2>
            @endif
            @if($vol->location == 'VA Office')
            <a href="/Opp2filter?title=Main Campus"class="btn btn-secondary" style="color: #F2F2F2" role="button">Matches</a></h2>
            @endif
             
            <a href="/volunteers/{{$vol->id}}/edit" class="btn btn-secondary" style="color: #F2F2F2" role="button">Edit</a>
            <a href="/pages/{{$vol->id}}/matches" class="btn btn-secondary" style="color: #F2F2F2" role="button">Matches</a>
            {!!Form::open(['action' => ['VolunteersController@destroy', $vol->id], 'method' => 'POST', 'class' => 'btn btn-danger', 'style' => 'padding: 0'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger', 'role' => 'button'])}}
            {!!Form::close()!!}
        </div>
    @endif

        <hr>
        <div>First Name: {{$vol->firstName}}</div>
        <div>Last Name: {{$vol->lastName}}</div>
        <div>username: {{$vol->userName}}</div>
        <div>status: {{$vol->status}}</div>
        <div>Center Applied For: {{$vol->location}}</div>
        <div>Skills: {{$vol->skills}}</div>
        <div>Availability: {{$vol->availability}}</div>
        <div>Address Line 1: {{$vol->address}}</div>
        <div>Address Line 2: {{$vol->address2}}</div>
        <div>City: {{$vol->city}}</div>
        <div>State: {{$vol->state}}</div>
        <div>Zip: {{$vol->zip}}</div>
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

    <hr>
<small>Created: {{$vol->created_at}} Created by: {{$vol->user->name}}</small>
        <div class="text-right">
            <a href="{{ URL::previous() }}" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
        </div>

@endsection