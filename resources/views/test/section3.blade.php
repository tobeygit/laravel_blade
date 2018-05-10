@extends('test.layout')

@section('title', '3')

{{--@section('title')--}}
{{--111--}}
{{--@endsection--}}

@section('sidebar')
    <ul>
        <li>不要新增</li>
        <li>我要完全取代</li>
        <li>我blade3</li>
    </ul>
@endsection

@section('content')
    <h1>假裝我是第3頁啊</h1>

    <p>前端需要大括號的用法
        <br>
        @{{ 123 }} <br>
        {{123}}<br>
        <br>
        區塊用法 laravel5.3<br>
        @verbatim
        Hello, {{ 5566 }}<br>
        Hello, {{ 56不能亡 }}.
        @endverbatim
    </p>

    <p>
        @if(1)
            <span style="color: #0000F0">啊啊啊</span>
        @elseif(1)
            <span style="color: #f0ad4e">嘻嘻嘻</span>
        @else
            <span style="color: #af43d4">哈哈哈</span>
        @endif
    </p>


    <p>
        @unless(0)
            <span style="color: #32f0eb">不成立才跑進來啊～</span>
        @endunless
    </p>

    @include('test.include')

@endsection