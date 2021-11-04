@extends('layout')

@section('content')
    <h1 class="register">Register</h1>

    <form action="<?php echo route("register") ?>" method="POST">
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

            Name:
            <input name="name" type="text" placeholder="Enter name here">

            Password:
            <input name="password" type="password" placeholder="Enter password here">

            Confirm Password:
            <input name="password_confirmation" type="password" placeholder="Confirm password here">
        <input class="submit" type="submit" value="Register">
    </form>

    <a class="login-link" href="<?php echo route("login")?>">Already got an account</a>

@endsection

