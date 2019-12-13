@extends('layouts.app')

@section('content')
    <h4><a href="{{route('admin.users.index')}}">Gebruikers</a></h4>

    <h1>Edit user</h1>

    <div class="col-sm-3">
        @if($user->photo)
            <img height="50" src="{{ $user->photo->file}}">
        @else
            No picture set<br>
        @endif
    </div>
    <br>
    <div class="col-sm-9">

        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update', $user->id],'files'=>true]) !!}

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
            {!! Form::select('role_id', $roles, null, ['class'=>'form-control select2minimal']) !!}
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
            {!! Form::submit('Opslaan',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy', $user->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
        </div>

        {!! Form::close() !!}

    </div>

    @include('includes.form_errors')

@endsection

