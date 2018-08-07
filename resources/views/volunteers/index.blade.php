@extends('layouts.app')

@section('content')
    <h1>volunteers</h1>
    @if(count($volunteers) > 0)
        @foreach($volunteers as $volunteer)
            <div class="well">
                <h3><a href="/volunteers/{{$volunteer->id}}">{{$volunteer->FName}}</a></h3>
               
            </div>
        @endforeach
        {{$volunteers->links()}}
    @else
        <p>No volunteers found</p>
    @endif
@endsection