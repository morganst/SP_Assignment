@extends('layouts.app')

@section('content')
    <style>
    li a, .dropbtn {
        display: inline-block;
        
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    li.dropdown {
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 5000;
    }
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }
    .dropdown-content a:hover {background-color: #f1f1f1}
    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>
    <h1>Opportunity Index</h1>
    <div>Here you can view and edit opportunities</div>
    <form class="form-inline my-2 my-md-0 nav" role="search" method="get" action="{{url("/searchOpp")}}">
            <div class="input-group">
                <input type="text" class="form-control mr-sm-2" placeholder="Search" name="title">
                <div class="input-group-btn">
                    <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="glyphicon glyphicon-search"></i>Search</button>
                </div>
            </div>
    </form> 
    <br>
    <li class="dropdown">
        <a href="javascript:void(0)" class="btn btn-md btn-success">Opportunity Filter <span class="fas fa-caret-down"/></a>
        <div class="dropdown-content">
          <a href="/filterTime">Most Recent</a>
          <a href="/filterAlpha">By Center</a>
          <a href="/opportunities">All</a>
        </div>
    </li>
    <div class="text-right"><a href="/opportunities/create" class="btn btn-md btn-primary">Add New</a></div>
    <hr>
    @if(count($opportunities) > 0)
        <div class="row">
            <div class="col-3 col-lg-3">Opportunity Name</div>
            <div class="col-2 col-lg-2">Center</div>
            <div class="col-2 col-lg-2">Created by</div>
        </div>
        <br />
        @foreach($opportunities as $opportunity)
            <div class="row">
                <div class="col-3 col-lg-3">{{$opportunity->name}}</div>
                <div class="col-2 col-lg-2">{{$opportunity->center}}</div>
                <div class="col-2 col-lg-2">{{$opportunity->user['name']}}</div>
                <div class"col-3 col-lg-3">
                    <div class="btn-group">
                        <a class="btn btn-secondary" href="/opportunities/{{$opportunity->id}}" role="button">View</a>
                        
                        @if(Auth::user()->id == $opportunity->user_id)
                            <a class="btn btn-primary active" href="/opportunities/{{$opportunity->id}}/edit" role="button">Edit</a>
                            {!!Form::open(['action' => ['OpportunityController@destroy', $opportunity->id], 'method' => 'POST', 'class' => 'btn btn-sm btn-danger'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
                            {!!Form::close()!!}
                        @else
                            <a class="btn btn-primary disabled" style="color: white" role="button" aria-disabled="true">Edit</a>
                            <a class="btn btn-danger disabled" style="color: white" role="button" aria-disabled="true">Delete</a>
                        @endif

                    </div>
                </div>
            </div>
            <div class="row">&nbsp;</div>
        @endforeach
    {{$opportunities->links()}}
    @else
        <p>No opportunities found</p>
    @endif
    </hr>
@endsection