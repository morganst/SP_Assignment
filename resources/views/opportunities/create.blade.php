@extends('layouts.app')

@section('content')
    <h1>New Opportunity</h1>
    <p>Please enter information for creating a new opportunity</p>
    {!! Form::open(['action' => 'OpportunityController@store', 'method' => 'POST']) !!}
        <form>
            <div class="form-row">
                {!! Form::label('name', 'Opportunity Name', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Opportunity Name'])}}
                </div>
            </div>
            &nbsp;
            <div class="form-row">
                {!! Form::label('center', 'Center', ['class' => 'col-lg-2 control-label'] )  !!}
                <div class="col col-md-3">
                    {{Form::text('center', '', ['class' => 'form-control', 'placeholder' => 'Center'])}}
                </div>
            </div>
            &nbsp;
            <div style="padding-top: 10px">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                <a class="btn btn-secondary" href="/opportunities" role="button">Back</a>
            </div>
        </form>
    {!! Form::close() !!}
@endsection