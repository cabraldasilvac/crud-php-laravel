@extends('master')

@section('content')

<a href="{{ route('users.create')}}">Create</a> | <a href='{{ route('home') }}'>HOME</a>
<hr>
<h2>Users</h2>

{{-- listar todos os usuarios --}}
<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->id }} {{ $user->first_name }} {{ $user->last_name }}
            | <a href="{{ route('users.edit',['user' => $user->id]) }}">Edit</a>
            |  <a href="{{ route('users.show',['user' => $user->id]) }}">Show</a>
        </li>

    @endforeach
</ul>

@endsection
