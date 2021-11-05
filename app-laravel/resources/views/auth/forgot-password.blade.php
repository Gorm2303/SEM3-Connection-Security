@extends('layout')

@section('content')


    <form action="/forgot-password" method="post">
        Email:
        <input name="email" type="text" placeholder="Enter email here">

    </form>
@endsection
