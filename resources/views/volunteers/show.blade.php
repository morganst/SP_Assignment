@extends('layouts.app')

@section('content')
    <h2>{{$vols->firstName}} {{$vols->lastName}}</h2>
    <div class="">Here is where you put information about the volunteer pulled from db</div>
    <div class="text-right">
        <a href="/volunteers" class="btn btn-sm btn-primary" role="button" aria-pressed="true">Back</a>
    </div>
    <hr><small>Created: {{$vols->created_at}}</small></hr>
@endsection