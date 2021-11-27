@extends('layout')

@section('content')
    <h1 class="welcome">Welcome to Connection Security - Team 10</h1>

    <a class="login-link" href="<?php echo route("login")?>">Login</a>
    <a class="register-link" href="<?php echo route("register")?>">Register</a>

@endsection

