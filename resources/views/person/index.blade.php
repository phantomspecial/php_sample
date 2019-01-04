@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    INDEX PAGE
@endsection

@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
            <th>Boards</th>
        </tr>
        @foreach ($hasitems as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
                <td>
                    @if ($item->boards != null)
                        <table width="100px">
                            @foreach ($item->boards as $board)
                                <tr>
                                    <td>{{$board->getData()}}</td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
        </tr>
        @foreach ($noitems as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2017
@endsection

