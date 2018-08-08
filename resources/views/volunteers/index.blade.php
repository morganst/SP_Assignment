@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Volunteer Index</h1>
        <div class="text-right col col-sm-8"><a href="/volunteers/create" class="btn btn-md btn-secondary">Add New</a></div>    
    </div>
    <div>Here you can view and edit volunteers</div><br />
    @if(count($volunteers) > 0)
        @foreach($volunteers as $volunteer)
            <div class="row">
                <div class="col-3 col-md-3">{{$volunteer->firstName}} {{$volunteer->lastName}}</div>
                <div class="col-3 col-md-3">{{$volunteer->userName}}</div>
                <div class="col-3 col-md-3">{{$volunteer->created_at}}</div>
                <div class"col-3 col-md-3">
                    <div class="btn-group">
                        <a class="btn btn-sm btn-secondary" href="/volunteers/{{$volunteer->id}}" role="button">View</a>
                        <a role="button" class="btn btn-sm btn-primary active" role="button">Edit</a>
                        <a role="button" class="btn btn-sm btn-danger active" role="button">Delete</a>
                    </div>
                </div>
            </div>
            <div class="row">&nbsp;</div>
        @endforeach
    {{$volunteers->links()}}
    @else
        <p>No volunteers found</p>
    @endif
@endsection