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

                    <h4>Manage your volunteer information</h4>
                    <div>
                        <p><a class="btn btn-primary btn-lg" href="/volunteers" role="button">Volunteer Index</a>
                        <a class="btn btn-primary btn-lg" href="/opportunities" role="button">Opportunity Index</a></p>
                    </div>
                    <br />

                    <h5>Your Volunteers</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">username</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($volunteer as $vol)
                            <tr>
                                <th scope="row">{{$vol->id}}</th>
                                <td>{{$vol->firstName}}</td>
                                <td>{{$vol->lastName}}</td>
                                <td>{{$vol->userName}}</td>
                                <td><a class="p-2 text-dark" href="/volunteers/{{$vol->id}}">View <span class="far fa-eye"></span></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
