@extends('master')

@section('content')

<a href='{{ route('users.create') }}'>Create</a> | <a href='{{ route('home') }}'>HOME</a>
<hr>

<h2>Create</h2>

@if(session()->has('message'))
    {{ session()->get('message')}}
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="first_name" placeholder="your firstName" value='Cabral'>
    <input type="text" name="last_name" placeholder="your lastName" value='Silva'>
    <input type="text" name="email" placeholder="your email" value='cabral@email.com'>
    <input type="text" name="pasword" placeholder="your password" value="12345#">
    <button type="submit">Create</button>
</form>

@endsection
