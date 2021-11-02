@extends('layout')

@section('content')
    <h1 class="register">Register</h1>

    <form action="<?php echo route("user.create") ?>" method="POST">
        <?php echo csrf_field(); ?>
            Email:
            <input name="email" type="text" placeholder="Enter email here">

            Username:
            <input name="username" type="text" placeholder="Enter username here">

            Password:
            <input name="password" type="password" placeholder="Enter password here">

            Confirm Password:
            <input name="confirmPassword" type="password" placeholder="Confirm password here">
        <input class="submit" type="submit" value="Register">
    </form>

    <a class="login-link" href="<?php echo route("user.login", ["user" => $user])?>">Already got an account</a>

@endsection

