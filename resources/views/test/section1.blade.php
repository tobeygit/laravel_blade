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
    <p>前端需要大括號的用法<br>
        @{{ 123 }} <br>
        {{123}}<br>
        <br>
        區塊用法5.5<br>
        @verbatim
        Hello, {{ 5566 }}<br>
        Hello, {{ 56不能亡 }}.
        @endverbatim
    </p>
    <a class="btn btn-success" href="{{route('section2')}}">到第2頁</a>
    <a class="btn btn-success" href="{{route('section3')}}">到第3頁</a>

    {{--@include('test.include')--}}

@endsection

