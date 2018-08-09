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
        <div>username: {{$vol->userName}}</div>
        <div>username: {{$vol->status}}</div>
        <div>username: {{$vol->status}}</div>
        <div>username: {{$vol->userName}}</div>
        <div>username: {{$vol->userName}}</div>
        <div>username: {{$vol->userName}}</div>
        <div>username: {{$vol->userName}}</div>
        <div>username: {{$vol->userName}}</div>
    </hr>
    <hr>
<small>Created: {{$vol->created_at}} Created by: {{$vol->user->name}}</small>
        <div class="text-right">
            <a href="/volunteers" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
        </div>
    </hr>
@endsection