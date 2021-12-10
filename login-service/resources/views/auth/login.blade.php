@extends('layout')

@section('content')
    <h1 class="login">Login</h1>

    <form action="<?php echo route("login") ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if($errors->any()): ?>
        <ul>
            <?php foreach($errors->all() as $error): ?>
            <li><?php echo $error;?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        Email:
        <input name="email" type="text" placeholder="Enter email here">

        Password:
        <input name="password" type="password" placeholder="Enter password here">
        <input class="submit" type="submit" value="Login">
    </form>

    <a class="register-link" href="<?php echo route("register")?>">Register</a>
    <a class="forgotpassword-link" href="<?php echo route("password.request")?>">Forgot password</a>
@endsection

