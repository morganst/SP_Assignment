@extends('layouts.app')

@section('content')
    <h1>Volunteer Index</h1>
    <p>Here you can view and edit volunteers</p>
    @if(count($volunteers) > 0)
        @foreach($volunteers as $volunteer)
            <div class="well well-lg">
                <div class="row">
                    <div class="col-3 col-md-3">Name: {{$volunteer->firstName}} {{$volunteer->lastName}}</div>
                    <div class="col-3 col-md-3">username: {{$volunteer->userName}}</div>
                    <div class="col-3 col-md-3">created at: {{$volunteer->created_at}}</div>
                    <div class"col-3 col-md-3">
                        <div class="btn-group">
                            <a href="/volunteers/{{$volunteer->id}}" class="btn btn-sm btn-secondary" role="button" aria-pressed="true">View</a>
                            <a class="btn btn-sm btn-primary" role="button" aria-pressed="true">Edit</a>
                            <a class="btn btn-sm btn-danger" role="button" aria-pressed="true">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">&nbsp;</div>
        @endforeach
    @else
        <p>No volunteers found</p>
    @endif
@endsection