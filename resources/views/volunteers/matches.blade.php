@extends('layouts.app')

@section('content')

@if(count($opportunities) > 0)
<div class="row">
    <div class="col-3 col-lg-3">Opportunity Name</div>
    <div class="col-2 col-lg-2">Center</div>
   
</div>
<br />
@foreach($opportunities as $opportunity)
    <div class="row">
        <div class="col-3 col-lg-3">{{$opportunity->name}}</div>
        <div class="col-2 col-lg-2">{{$opportunity->center}}</div>
       
      
    </div>
    <div class="row">&nbsp;</div>
@endforeach
{{$opportunities->links()}}
@else
<p>No opportunities found</p>
@endif
@endsection

