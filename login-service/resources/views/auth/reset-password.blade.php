@extends('layout')

@section('content')


    <form action="<?php echo route("password-update", ['token' => $token]) ?>" method="post">
    @csrf
    <input type="hidden" name="token" value=" {{$token}} "/>
    <div class="form-group">
    <label for="email">Email:</label>
    <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email here"
           value="{{$email ?? old('email')}}" />
        <span class="text-danger">@error('email'){{$message}}@enderror</span>
    </div>
    <div class="form-group">
    <label for="password">New Password:</label>
    <input id="password" type="password" class="form-control" name="password" placeholder="Enter your new password here" />
    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
    </div>
    <div class="form-group">
    <label for="password-confirm">Confirm:</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
        placeholder="Confirm your new password" />
    <span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
    </div>

    <input type="submit" value="Submit">
    </form>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
@endsection
