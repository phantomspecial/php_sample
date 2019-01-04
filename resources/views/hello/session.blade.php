@extends('layouts.helloapp')

@section('title', 'Session')

@section('menubar')
    @parent
    SESSION PAGE
@endsection

@section('content')
    <p>{{$session_data}}</p>
    <form action="/hello/session" method="post">
        {{csrf_field()}}
        <input type="text" name="input">
        <input type="submit" value="send">
    </form>
@endsection

@section('footer')
    copyright 2017
@endsection

