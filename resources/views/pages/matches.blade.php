@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
<h1>Matches Page</h1></h1>
@endsection
@if(Auth::user()->id == $vol->user_id)
    <h2>{{$vol->firstName}} {{$vol->lastName}}</h2>
@endif
