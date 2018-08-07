@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>You are logged in!</p></br>
                    @if(count($volunteers) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($volunteers as $volunteer)
                                <tr>
                                    <td>{{$volunteer->FName}}</td>
                                    <td><a href="/volunteers/{{$volunteer->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>{!!Form::open(['action'=>['VolunteerController@destroy',$volunteer->id],'method'=>'post','class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no volunteers</p>
                    @endif
                    <a href="/volunteers" class="btn btn-primary">volunteers</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
