@extends('layouts.app')
  
@section('content')
<div class="jumbotron text-center">
<h1>{{$title}}</h1> 
<p><a class="btn btn-primary btn-lg" href="/volunteers" role="button">Manage Volunteers</a></p>
<p><a class="btn btn-primary btn-lg" href="/" role="button">Manage Opportunities</a></p>
@endsection