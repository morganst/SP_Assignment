@extends('layouts.app')

@section('content')
    <h1>Volunteer</h1>
    <div>
        <ul style="list-style-type:none">
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
          </ul>            
        {!!$volunteer->FName!!}
        {!!$volunteer->LName!!}
    </div>
    <a href="/volunteers/{{$volunteer->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action'=>['VolunteerController@destroy',$volunteer->id],'method'=>'post','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    <a href="/volunteers" class="btn btn-default">Back</a>
@endsection