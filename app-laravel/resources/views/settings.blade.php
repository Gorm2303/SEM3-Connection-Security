@extends('layout')

@section('content')
    <h1>Settings</h1>

    <form action="<?php echo route("index") ?>" method="GET">
        <h3>Reset password</h3>
        Password:
        <input name="password" type="password" placeholder="Enter password here">

        Confirm password
        <input name="password_confirmation" type="password" placeholder="Confirm password here">

        <input type="submit" value="Doesn't work yet">
    </form>

@endsection
