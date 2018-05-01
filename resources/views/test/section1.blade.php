@extends('test.layout')

@section('title', '1')

{{--@section('title')--}}
    {{--111--}}
{{--@endsection--}}

@section('sidebar')
    @parent
    <p>因為有加＠parent所以有顯示主板的東東</p>
@endsection

@section('content')
    <h1>在這裡放主要內容</h1>
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

    @include('test.include')

@endsection