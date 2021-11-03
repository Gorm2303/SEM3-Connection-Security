@extends('layout')

@section('content')
    <h1 class="welcome">Welcome to Connection Security - Team 10</h1>

    <a class="login-link" href="<?php echo route("login")?>">Login</a>
    <a class="register-link" href="<?php echo route("register")?>">Register</a>

    <?php if (session()->has("success")): ?>
        <div class="success-message"><?php echo session("success"); ?></div>
    <?php elseif (session()->has("authenticated")): ?>
        <div class="authenticated-message"><?php echo session("authenticated"); ?></div>
    <?php elseif (session()->has("denied")): ?>
        <div class="denied-message"><?php echo session("denied"); ?></div>
    <?php endif; ?>
@endsection

