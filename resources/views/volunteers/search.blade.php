@extends('layouts.appV')

@section('content')
<h1>Volunteer Search Results</h1>
<p>Here you can view and edit volunteers</p>
    @if(count($volunteers) > 0)
        @foreach($volunteers as $volunteer)
            <div class="well well-lg">
                <div class="row">
                    <div class="col-3 col-md-3">Name: {{$volunteer->FName}} {{$volunteer->LName}}</div>
                    <div class="col-3 col-md-3">username: {{$volunteer->Username}}</div>
                    <div class="col-3 col-md-3">created at: {{$volunteer->created_at}}</div>          
                    <div class"col-3 col-md-3">
                        <div class="btn-group">
                            <a href="/volunteers/{{$volunteer->id}}" class="btn btn-sm btn-secondary" role="button" aria-pressed="true">View</a>
                            <a href="/volunteers/{{$volunteer->id}}/edit" class="btn btn-sm btn-primary" role="button" aria-pressed="true">Edit</a>
                        </div>
                        {!!Form::open(['action'=>['VolunteerController@destroy',$volunteer->id],'method'=>'post','class'=>'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
            <div class="row">&nbsp;</div>
        @endforeach

    @else
        <p>No volunteers found</p>
    @endif
@endsection