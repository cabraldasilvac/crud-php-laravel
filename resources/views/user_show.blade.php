@extends('master')

@section('content')
<a href='{{ route('home') }}'>HOME</a></h2> |
<h2>user - {{ $user->first_name }}


<form action="{{ route('users.destroy'), ['user' => $user->id] }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="delete">
    <button type="submit">Delete</button>
</form>

@endsection
