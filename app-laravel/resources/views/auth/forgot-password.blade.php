@extends('layout')

@section('content')


    <form action="{{url('mail')}}" method="post">
       @csrf
         Email:
        <input type="text" name="email" placeholder="Enter email here" />
        <input type="submit" value="Submit">
    </form>
@endsection
