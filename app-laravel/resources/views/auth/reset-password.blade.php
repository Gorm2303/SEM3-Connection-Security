@extends('layout')

@section('content')


    <form action="<?php echo route("password-update", ['token' => $token]) ?>" method="post">
    @csrf
    Email:
    <input type="text" name="email" placeholder="Enter your email here" />
    <input type="password" name="password" placeholder="Enter your new password here" />
    <input type="password" name="password-confirmation" placeholder="Confirm your new password" />
    <input type="hidden" name="token" value="$token" />
    <input type="submit" value="Submit">
    </form>
@endsection
