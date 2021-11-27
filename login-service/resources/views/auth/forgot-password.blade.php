@extends('layout')

@section('content')


    <form action="<?php echo route('email') ?>" method="post">
        <?php echo csrf_field() ?>
        Email:
        <input name="email" type="text" placeholder="Enter email here">
        <input class="submit" type="submit" value="submit">
    </form>
@endsection
