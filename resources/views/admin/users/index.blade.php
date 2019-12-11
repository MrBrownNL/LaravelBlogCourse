@extends('layouts.app')

@section('content')
    <h1><a href="{{route('admin.users.index')}}">Users</a></h1>

<table class="table table-hover">
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>role</th>
        <th>created</th>
    </tr>
    </thead>
    <body>
    @if($users)
        @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
            </tr>

        @endforeach


    @endif
    </body>
</table>
<br>
  <h1><a href="{{route('admin.users.create')}}">Gebruiker toevoegen</a></h1>

@endsection

