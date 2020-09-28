@extends('layouts.app')
@section('title')
   Profile
@endsection

@section('content')
<div class="card">
    <div class="card-header">My Profile</div>
    @include('partials.error')
    <div class="card-body">
        <form action="{{route('users.update-profile')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="about">About Me</label>
                <textarea class="form-control" name="about" id="about" cols="5" rows="5">{{$user->about}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update Profile</button> 
        </form>
        <a href="{{route('home')}}" class="btn btn-primary mt-1">Return Home</a>

    </div>
</div>
@endsection

