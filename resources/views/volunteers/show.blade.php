@extends('layouts.app')

@section('content')
    <h2>{{$vols->firstName}} {{$vols->lastName}}</h2>
    <div class="">Here is where you put information about the volunteer pulled from db</div>
    <hr>
        <div>username: {{$vols->userName}}</div>
        <div>username: {{$vols->userName}}</div>
        <div>username: {{$vols->userName}}</div>
        <div>username: {{$vols->userName}}</div>
        <div>username: {{$vols->userName}}</div>
        <div>username: {{$vols->userName}}</div>
        <div>username: {{$vols->userName}}</div>
        <div>username: {{$vols->userName}}</div>
    </hr>
    <hr>
        <small>Created: {{$vols->created_at}}</small>
        <div class="text-right">
            <a href="/volunteers" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
        </div>
    </hr>
@endsection