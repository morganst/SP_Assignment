@extends('layouts.app')

@section('content')
    <h2>{{$opp->firstName}}</h2>
    <div class="">Here is where you put information about the Opportunity pulled from db</div>
    
    @if(Auth::user()->id == $opp->user_id) 
        <div class="text-right">
            <a href="/opportunities/{{$opp->id}}/edit" class="btn btn-secondary" style="color: #F2F2F2" role="button">Edit</a>
            {!!Form::open(['action' => ['OpportunityController@destroy', $opp->id], 'method' => 'POST', 'class' => 'btn btn-danger', 'style' => 'padding: 0'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger', 'role' => 'button'])}}
            {!!Form::close()!!}
        </div>
    @endif
    
        <hr>
        <div>Opportunity Name: {{$opp->name}}</div>
        <div>Center Name: {{$opp->center}}</div>
    </hr>
    <hr>
<small>Created: {{$opp->created_at}} Created by: {{$opp->user->name}}</small>
        <div class="text-right">
            <a href="{{ URL::previous() }}" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
        </div>
    </hr>
@endsection