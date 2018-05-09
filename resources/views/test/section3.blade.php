@extends('test.layout')

@section('title', '3')

{{--@section('title')--}}
{{--111--}}
{{--@endsection--}}

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>假裝我是第3頁啊</h1>

    <p>
        @if(1)
            啊啊啊
        @elseif(1)
            嗎嗎嗎
        @else
            內內內
        @endif
    </p>


    <p>
        @unless(0)
            除非跑進來
        @endunless
    </p>

    @include('test.include')

@endsection