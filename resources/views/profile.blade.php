@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body  overflow-hidden">
            <div class="row flex-nowrap">
                <div class="col-md-6">
                    <label>Name</label>
                </div>
                <div class="col-md-6">
                    <p>{{ $user->name }}</p>
                </div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-md-6">
                    <label>Username</label>
                </div>
                <div class="col-md-6">
                    <p>{{ $user->username }}</p>
                </div>
            </div>


            <div class="row flex-nowrap">
                <div class="col-md-6">
                    <label>Email</label>
                </div>
                <div class="col-md-6">
                    <p>{{ $user->email }}</p>
                </div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-md-6">
                    <label>Address</label>
                </div>
                <div class="col-md-6">
                    <p>{{ $user->address }}</p>
                </div>
            </div>

            <div class="row flex-nowrap">
                <div class="col-md-6">
                    <label>Zip code</label>
                </div>
                <div class="col-md-6">
                    <p>{{$user->zipcode}}</p>
                </div>
            </div>
            <div class="card-img-overlay text-right">
                <a class="btn btn-primary" href="edit/{{ $user->name }}" role="button">Edit</a>
            </div>
        </div>
    </div>
</div>

@endsection