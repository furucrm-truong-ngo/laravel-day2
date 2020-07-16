@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="/edit/<?php echo $user->username; ?>" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
                </div>

                <div class="form-group">
                    <label for="zipcode">Zip code</label>
                    <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{ $user->zipcode }}">
                </div>

                <button type="submit" class="btn btn-primary">Updates</button>
            </form>
        </div>
    </div>
</div>
@endsection