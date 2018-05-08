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
        <img src="{{asset('/img/view-layout.jpg')}}" width="100%">
    </p>
    <p>
        <a class="btn btn-success" href="{{route('section1')}}">到第1頁</a>
        <a class="btn btn-success" href="{{route('section2')}}">到第2頁</a>
    </p>

    @include('test.include')

@endsection