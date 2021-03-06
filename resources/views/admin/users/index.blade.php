@extends('layouts.app')

@section('content')

    @if(\Illuminate\Contracts\Session\Session::has('deleted_user'))

        <span class="label label-danger">{{ session('deleted_user') }}</span>

        @endif

    <h1><a href="{{route('admin.users.index')}}">Gebruikers</a></h1>

<table class="table table-hover">
    <thead>
    <tr>
        <th>id</th>
        <th>Photo</th>
        <th>Naam</th>
        <th>E-mail</th>
        <th>Rol</th>
        <th class="text-center">Actief</th>
        <th>Aangemaakt</th>
        <th>Gewijzigd</th>
    </tr>
    </thead>
    <body>
    @if($users)
        @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->photo ? $user->photo->file : ''}}"></td>
                <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td class="text-center"><i class="fa @if ($user->is_active == 1)
                        fa-check text-success
                    @else
                        fa-times text-danger
                    @endif
                        "></i></td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>

        @endforeach


    @endif
    </body>
</table>
<br>
  <h1><a href="{{route('admin.users.create')}}">Gebruiker toevoegen</a></h1>

@endsection

