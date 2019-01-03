@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    INDEX PAGE
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <p>Failed!</p>
    @endif
    <table>
        <form action="/hello" method="post">
            {{ csrf_field() }}
            @if ($errors->has('name'))
                <tr><th>Error</th><td>{{$errors->first('name')}}</td></tr>
            @endif
            <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

            @if ($errors->has('mail'))
                <tr><th>Error</th><td>{{$errors->first('mail')}}</td></tr>
            @endif
            <tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>

            @if ($errors->has('age'))
                <tr><th>Error</th><td>{{$errors->first('age')}}</td></tr>
            @endif
            <tr><th>age:</th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>

            <tr><th>name:</th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>


    {{--<p>ほんぶん</p>--}}
    {{--<p><middleware>google.com</middleware>link</p>--}}
    {{--<p><middleware>yahoo.co.jp</middleware>link</p>--}}


    {{--<table>--}}
        {{--@foreach($data as $item)--}}
            {{--<tr>--}}
                {{--<th>--}}
                    {{--{{$item['name']}}--}}
                {{--</th>--}}
                {{--<td>--}}
                    {{--{{$item['mail']}}--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
    {{--</table>--}}

    {{--<p>Controller Val<br>'message' = {{array_values($data)[0]}}</p>--}}
    {{--<p>ViewComposer Val<br>'view_message' = {{$view_message}}</p>--}}

    {{--@each('components.item', $data, 'item')--}}

{{--    @include('components.message', ['msg_title'=>'', 'msg_content'=>'sub view'])--}}

    {{--@component('components.message')--}}
        {{--@slot('msg_title')--}}
        {{--CAUTION!--}}
        {{--@endslot--}}

        {{--@slot('msg_content')--}}
        {{--TEXT--}}
        {{--@endslot--}}
    {{--@endcomponent--}}
@endsection

@section('footer')
    copyright 2017
@endsection

