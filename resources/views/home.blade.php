@extends('master')

@section('content')

<a href='{{ route('users.create') }}'>Create</a> | <a href='{{ route('users.index') }}'>View All</a>
<hr>

<h2>Home</h2>

@endsection
