@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    INDEX PAGE
@endsection

@section('content')
    @if (Auth::check())
        <p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
    @else
        <p>Please Login(<a href="/login">Login</a> | <a href="/register">Register</a>)</p>
    @endif

    <table>
        <tr>
            <th><a href="/hello?sort=id">ID</a></th>
            <th><a href="/hello?sort=name">Name</a></th>
            <th><a href="/hello?sort=mail">Mail</a></th>
            <th><a href="/hello?sort=age">Name</a></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    {{$items->appends(['sort' => $sort])->links()}}
@endsection

@section('footer')
    copyright 2017
@endsection

