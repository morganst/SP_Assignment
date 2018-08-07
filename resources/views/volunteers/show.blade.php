@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <h1>Volunteer</h1>
    <div>
        <ul style="list-style-type:none">
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
          </ul>            
=======
    <h1>{{$volunteer->title}}</h1>
    <div>
>>>>>>> d4bd915baaadb57d16fc1d6678e4b70888938365
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