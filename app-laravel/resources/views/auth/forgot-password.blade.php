@extends('layout')

@section('content')


    <form action="<?php echo route("password.email") ?>" method="post">
       @csrf
         Email:
        <input type="text" name="email" placeholder="Enter email here" />
        <input type="submit" value="Submit">
    </form>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
@endsection
