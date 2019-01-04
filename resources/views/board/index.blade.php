@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    BOARD PAGE
@endsection

@section('content')
    <table>
        <tr>
            <th>Message</th>
            <th>PersonName</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->message}}</td>
                <td>{{$item->person->name}}</td>
            </tr>
        @endforeach
    </table>
    {{$items->links()}}
@endsection

@section('footer')
    copyright 2017
@endsection

