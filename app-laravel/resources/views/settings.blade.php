@extends('layout')

@section('content')
    <h1>Settings</h1>

    <form action="<?php echo route("update") ?>" method="POST">
        @csrf
        <h3>Reset password</h3>

        Old Password:
        <input name="old-password" type="password" placeholder="Enter password here">

        New Password:
        <input name="password" type="password" placeholder="Enter password here">

        Confirm New Password
        <input name="password_confirmation" type="password" placeholder="Confirm password here">

        <input type="submit" value="Submit">
    </form>

    <?php if (session()->has('success')): ?>
        <p><?php echo session('success'); ?></p>
    <?php endif; ?>

    @if ($errors->any())
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

@endsection
