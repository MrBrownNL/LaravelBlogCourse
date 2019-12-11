@extends('layouts.app')

@section('content')
    <h4><a href="{{route('admin.users.index')}}">Gebruikers</a></h4>

    <h1>Create user</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name','Naam:') !!}
        {!! Form::text('name', null, [ 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','E-mail:') !!}
        {!! Form::text('email', null, [ 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Foto:') !!}
        {!! Form::file('photo_id', null, [ 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id','Rol:') !!}
        {!! Form::select('role_id',[''=>'Kies een rol'] + $roles, null, ['class'=>'form-control select2minimal']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',[1=>'Actief',0=>'Niet actief'], null, [ 'class'=>'form-control select2minimal']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Wachtwoord:') !!}
        {!! Form::password('password', [ 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Gebruiker aanmaken',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @include('includes.form_errors')

@endsection

