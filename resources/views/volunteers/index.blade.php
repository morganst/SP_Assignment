<<<<<<< HEAD
@extends('layouts.appV')

@section('content')
    <h1>Volunteers</h1>
    @if(count($volunteers) > 0)
        @foreach($volunteers as $volunteer)
            <div class="well">
                <h3><a href="/volunteers/{{$volunteer->id}}">{{$volunteer->FName}} {{$volunteer->LName}}</a></h3>
                <a href="/volunteers/{{$volunteer->id}}/edit" class="btn btn-default">Edit</a>
            </div>
            
=======
@extends('layouts.app')

@section('content')
    <h1>volunteers</h1>
    @if(count($volunteers) > 0)
        @foreach($volunteers as $volunteer)
            <div class="well">
                <h3><a href="/volunteers/{{$volunteer->id}}">{{$volunteer->FName}}</a></h3>
               
            </div>
>>>>>>> d4bd915baaadb57d16fc1d6678e4b70888938365
        @endforeach
        {{$volunteers->links()}}
    @else
        <p>No volunteers found</p>
    @endif
@endsection