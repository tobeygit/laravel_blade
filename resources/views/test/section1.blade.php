@extends('test.layout')

@section('title', '1')

{{--@section('title')--}}
    {{--111--}}
{{--@endsection--}}

@section('sidebar')
    @parent
    <ul>
        <li>因為有加＠parent所以有顯示主板的東東</li>
        <li>我是blade1</li>
    </ul>
@endsection

@section('content')
    <h1>假裝我是什麼Blog</h1>

    <p style="text-align: center;">
        <img src="{{asset('/img/html-tag.jpg')}}" width="50%" style="border: 1px #000 dashed;">
    </p>

    @include('test.include')

@endsection

