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
    <p>
        哈哈哈
    </p>
    <p>
        <a class="btn btn-success" href="{{route('section1')}}">到第1頁</a>
        <a class="btn btn-success" href="{{route('section3')}}">到第3頁</a>
    </p>

    @include('test.include')

@endsection