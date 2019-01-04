@extends('layouts.helloapp')

@section('title', 'Board.add')

@section('menubar')
    @parent
    ADD PAGE
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table>
        <form action="/board/add" method="POST">
            {{csrf_field()}}
            <tr><th>PersonID: </th><td><input type="number" name="person_id" value="{{old('person_id')}}"></td></tr>
            <tr><th>Title: </th><td><input type="text" name="title" value="{{old('title')}}"></td></tr>
            <tr><th>Message: </th><td><input type="text" name="message" value="{{old('message')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>

@endsection

@section('footer')
    copyright 2017
@endsection

