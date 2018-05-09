@extends('test.layout')

@section('title', '1')

{{--@section('title')--}}
    {{--111--}}
{{--@endsection--}}

@section('sidebar')
    @parent
    <ul>
        <li>只有我自己～打我啊</li>
        <li>我是blade2</li>
    </ul>
@endsection

@section('content')
    <h1>假裝我是第二頁啊</h1>

    <p>前端需要大括號的用法
        <br>
        @{{ 123 }} <br>
        {{123}}<br>
        <br>
        區塊用法5.5<br>
        @verbatim
        Hello, {{ 5566 }}<br>
        Hello, {{ 56不能亡 }}.
        @endverbatim
    </p>

    @include('test.include')

@endsection