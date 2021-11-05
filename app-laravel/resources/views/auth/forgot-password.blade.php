@extends('layout')

@section('content')


    <form action="/forgot-password" method="post">
        Email:
        <input name="email" type="text" placeholder="Enter email here">
        <input class="submit" type="submit" value="submit">
    </form>
@endsection
