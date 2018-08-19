@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    
<h1>Matches Page</h1></h1>
@if(Auth::user()->id == $vol->user_id)
<h2>{{$vol->location}} {{$vol->lastName}}</h2>
@endif
@if($vol->location == 'Main Campus')
<h2>{{$vol->location}} {{$vol->lastName}}</h2>
@endif

<li class="dropdown">
    <a href="javascript:void(0)" class="btn btn-md btn-success">Opportunity Filter <span class="fas fa-caret-down"/></a>
    <div class="dropdown-content">
        <a href="/filterAlpha">By Center</a>
        <a href="/Oppfilter?title=Main Campus">Main Campus</a>
        <a href="/Oppfilter?title=Animal Shelter">Animal Shelter</a>
        <a href="/Oppfilter?title=Homeless Shelter"> Homeless Shelter</a>
        <a href="/Oppfilter?title=VA Office">VA Office</a>
       
        {{-- @if({{$vol->location}}=='Main Campus')
        <h2> <a href="/Oppfilter?title=Main Campus">Main Campus</a></h2>
    @endif --}}
    <a href="/Opp2filter?title=Main Campus">Main Campus</a></h2>
    </div>
</li>
@endsection
