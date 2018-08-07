@extends('layouts.app')

@section('content')
    <h1>Volunteer</h1>
    <div>
        <ul style="list-style-type:none">
            <li>{!!$volunteer->FName!!} {!!$volunteer->LName!!}</li>
            <li>{!!$volunteer->Username!!}</li>
            <li>{!!$volunteer->Password!!}</li>
            <li>{!!$volunteer->WorkCenter!!}</li>
            <li>{!!$volunteer->Skills!!}</li>
            <li>{!!$volunteer->Avail!!}</li>
            <li>{!!$volunteer->Address!!}</li>
            <li>{!!$volunteer->HomeNum!!}</li>
            <li>{!!$volunteer->WorkNum!!}</li>
            <li>{!!$volunteer->CellNum!!}</li>
            <li>{!!$volunteer->Email!!}</li>
            <li>{!!$volunteer->EduBack!!}</li>
            <li>{!!$volunteer->Licenses!!}</li>
            <li>{!!$volunteer->ERName!!}</li>
            <li>{!!$volunteer->ERPhoneNum!!}</li>
            <li>{!!$volunteer->EREmail!!}</li>
            <li>{!!$volunteer->ERAddress!!}</li>
            <li>{!!$volunteer->LicenseCP!!}</li>
            <li>{!!$volunteer->SSNCP!!}</li>
            <li>{!!$volunteer->AppStatus!!}</li>
          </ul>            
    </div>
    <a href="/volunteers/{{$volunteer->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action'=>['VolunteerController@destroy',$volunteer->id],'method'=>'post','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
    {!!Form::close()!!}
    <a href="/volunteers" class="btn btn-default">Back</a>
@endsection