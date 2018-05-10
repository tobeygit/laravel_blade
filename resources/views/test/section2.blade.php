@extends('test.layout')

@section('title', '1')

{{--@section('title')--}}
    {{--111--}}
{{--@endsection--}}

@section('sidebar')
    @parent
    <ul>
        <li>打我啊～笨蛋</li>
        <li>我是blade2</li>
    </ul>
@endsection

@section('content')
    <h1>假裝我是第二頁啊</h1>

    <p style="text-align: center;">
        <img src="{{asset('/img/view-layout.jpg')}}" width="100%" style="border: 1px #000 dashed;">
    </p>

    @include('test.include')

@endsection