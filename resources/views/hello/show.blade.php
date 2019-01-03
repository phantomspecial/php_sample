@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    SHOW PAGE
@endsection

@section('content')
    @if ($items != null)
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mail</th>
                <th>Age</th>
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
    @endif
@endsection

@section('footer')
    copyright 2017
@endsection

