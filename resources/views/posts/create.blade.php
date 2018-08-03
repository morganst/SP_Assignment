@extends('layouts.app')

@section('content')
    <h1>Create</h1>
    {!! Form::open(['action'=>'PostsController@store','method'=>'post']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}   
@endsection