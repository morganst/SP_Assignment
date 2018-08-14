@extends('layouts.app')

@section('content')
    <style>
    li a, .dropbtn {
        display: inline-block;
        color: white;
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
    <h1>Volunteer Index</h1>
    <div>Here you can view and edit volunteers</div>
    <div class="text-right"><a href="/volunteers/create" class="btn btn-md btn-success">Add New</a></div>  
    <form class="form-inline my-2 my-md-0 nav" role="search" method="get" action="{{url("/search")}}">
            <div class="input-group">
                <input type="text" class="form-control mr-sm-2" placeholder="Search" name="title">
                <div class="input-group-btn">
                    <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="glyphicon glyphicon-search"></i>Search</button>
                </div>
            </div>
    </form>
    <br> 
    <li class="dropdown">
        <a href="javascript:void(0)" class="btn btn-md btn-success">Volunteer Filter</a>
        <div class="dropdown-content">
          <a href="/multiFilter">Approved/Pending</a>
          <a href="/filter?title=Approved">Approved</a>
          <a href="/filter?title=Pending Approval">Pending Approval</a>
          <a href="/filter?title=Disapproved">Disapproved</a>
          <a href="/filter?title=Inactive">Inactive</a>
          <a href="/volunteers">All</a>
        </div>
    </li>
    <hr>
    @if(count($volunteers) > 0)
        <div class="row">
            <div class="col-3 col-lg-3">Name</div>
            <div class="col-2 col-lg-2">username</div>
            <div class="col-2 col-lg-2">Created by</div>
            <div class="col-2 col-lg-2">Status</div>
        </div>
        <br />
        @foreach($volunteers as $volunteer)
            <div class="row">
                <div class="col-3 col-lg-3">{{$volunteer->firstName}} {{$volunteer->lastName}}</div>
                <div class="col-2 col-lg-2">{{$volunteer->userName}}</div>
                <div class="col-2 col-lg-2">{{$volunteer->user['name']}}</div>
                <div class="col-2 col-lg-2">{{$volunteer->status}}</div>
                <div class"col-3 col-lg-3">
                    <div class="btn-group">
                        <a class="btn btn-secondary" href="/volunteers/{{$volunteer->id}}" role="button">View</a>
                        
                        @if(Auth::user()->id == $volunteer->user_id)
                            <a class="btn btn-primary active" href="/volunteers/{{$volunteer->id}}/edit" role="button">Edit</a>
                            {!!Form::open(['action' => ['VolunteersController@destroy', $volunteer->id], 'method' => 'POST', 'class' => 'btn btn-sm btn-danger'])!!}
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
    {{$volunteers->links()}}
    @else
        <p>No volunteers found</p>
    @endif
    </hr>
@endsection