@extends('layouts.app')

@section('title')
Post
@endsection

@section('content')

<div class="card card-default">
    <div class="card-header">
        User's list
    </div>
    <div class="card-body">
        @if ($users->count()>0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>
                        <img src="{{ Gravatar::get($user->email)}}" width="40px" height="40px"
                            style="border-radius: 50%" alt="image">
                    </td>
                    <td>{{$user->name}}
                        <small>
                            @if ($user->isAdmin())
                            [{{$user->role}}]
                            @endif
                        </small>
                    </td>
                    <td>{{$user->email}}</td>
                    @if (!$user->isAdmin())
                    <td>
                        <form action="{{route('users.make-admin',$user->id)}}" method="POST">
                            @csrf
                            <button type="submit" class=" btn btn-success btn-sm">MAke Admin</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach


            </tbody>
        </table>

        {{ $users->links() }}


        @else
        <h3 class="text-center">No Users Availabe</h3>
        @endif
    </div>
</div>
@endsection