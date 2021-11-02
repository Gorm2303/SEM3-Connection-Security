@extends('layout')

@section('content')
    <h1 class="login">Login</h1>

    <form action="<?php echo route("user.check", ["user" => $user]) ?>" method="POST">
        <?php echo csrf_field(); ?>
        Username:
        <input name="username" type="text" placeholder="Enter username here">

        Password:
        <input name="password" type="password" placeholder="Enter password here">
        <input class="submit" type="submit" value="Login">
    </form>

    <a class="register-link" href="<?php echo route("user.register")?>">Register</a>
    <a class="forgotpassword-link" href="<?php echo route("index")?>">Forgot password</a>
@endsection

