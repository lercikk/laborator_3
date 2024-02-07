@extends('layouts.app')

@section('title', 'Create users')

@section('content')

    <form  action="{{ route('users.store')}}" method="post">
        @csrf
        <input type="text " name="name" placeholder="Name" ><br>
        <input type="email " name="email" placeholder="Email" ><br>
        <input type="password " name="password" placeholder="Password" ><br>
        <button type="submit">Save</button>
        
 @endsection
