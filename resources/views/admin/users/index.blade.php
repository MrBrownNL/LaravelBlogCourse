@extends('layouts.app')

@section('content')
    <h1><a href="{{route('users.index')}}">Users</a></h1>

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
  <h1><a href="{{route('users.index')}}">Create user</a></h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name','Naam:') !!}
        {!! Form::text('name', null, [ 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file','Bestand:') !!}
        {!! Form::file('file', null, [ 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id',[''=>'Kies een rol'] + $roles, null, [ 'class'=>'form-control select2minimal']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Gebruiker aanmaken',['class'=>'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}


    <!-- TODO: Place in seperate template -->

    @if(count($errors) > 0)

    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
    </div>

    @endif
@endsection

