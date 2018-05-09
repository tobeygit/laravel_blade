@extends('test.layout')

@section('title', '4')

{{--@section('title')--}}
    {{--111--}}
{{--@endsection--}}

@section('sidebar')
    @parent
    <ul>
        <li>只有我自己～打我啊</li>
        <li>我是blade4</li>
    </ul>
@endsection

@section('content')
    <h1>我是第四頁～沒假裝</h1>

    {{--for loop--}}
    {{--@for ($i = 0; $i < 5; $i++)
        <article style="margin: 20px; color: #5e5d5d; padding: 20px; border: 1px #7DA0B1 dashed">
            <h3>標題{{$i+1}}</h3>
            <section style="color: #5e5d5d">
                什麼是 MVC 的View？ • MVC 設計架構裡，M 代表 Model 負責處理資料；V 代表View 負責顯⽰示⾴頁⾯面；C 代表 Controller 負責控 制 M 及V 間的溝通並回傳結果 • 在此架構設計下，View 的功能就是負責儲存 HTML，並將要顯⽰示動態資料的部份留下來，等待被 呼叫的時候由外部傳⼊入 • 如此即可讓商業邏輯 (M)、顯⽰示 (V) 與程式控制 (C) 三者獨⽴立開來，彼此分⼯工、互相合作
            <span style="color: #985f0d">(...more)</span>
            </section>
        </article>
    @endfor--}}


    {{--foreach loop--}}
    {{--@foreach (['A','B','C','D','E'] as $article)
        <article style="margin: 20px; color: #5e5d5d; padding: 20px; border: 1px #7DA0B1 dashed">
            <h3>標題{{$article}}</h3>
            <section style="color: #5e5d5d">
                什麼是 MVC 的View？ • MVC 設計架構裡，M 代表 Model 負責處理資料；V 代表View 負責顯⽰示⾴頁⾯面；C 代表 Controller 負責控 制 M 及V 間的溝通並回傳結果 • 在此架構設計下，View 的功能就是負責儲存 HTML，並將要顯⽰示動態資料的部份留下來，等待被 呼叫的時候由外部傳⼊入 • 如此即可讓商業邏輯 (M)、顯⽰示 (V) 與程式控制 (C) 三者獨⽴立開來，彼此分⼯工、互相合作
                <span style="color: #985f0d">(...more)</span>
            </section>
        </article>
    @endforeach--}}


    {{--forelse--}}

    {{--@forelse ([] as $user)--}}

    @forelse (['a','b','c','d','e'] as $user)
        <article style="margin: 20px; color: #5e5d5d; padding: 20px; border: 1px #7DA0B1 dashed">
            <h3>標題{{$user}}</h3>
            <section style="color: #5e5d5d">
                什麼是 MVC 的View？ • MVC 設計架構裡，M 代表 Model 負責處理資料；V 代表View 負責顯⽰示⾴頁⾯面；C 代表 Controller 負責控 制 M 及V 間的溝通並回傳結果 • 在此架構設計下，View 的功能就是負責儲存 HTML，並將要顯⽰示動態資料的部份留下來，等待被 呼叫的時候由外部傳⼊入 • 如此即可讓商業邏輯 (M)、顯⽰示 (V) 與程式控制 (C) 三者獨⽴立開來，彼此分⼯工、互相合作
                <span style="color: #985f0d">(...more)</span>
            </section>
        </article>
    @empty
        <p>No users</p>
    @endforelse



    @include('test.include')

@endsection