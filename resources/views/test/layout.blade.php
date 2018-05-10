<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <title>站名 - @yield('title', '主板')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<div class="container">
    <div class="row">
        <header>
            <img src="{{asset('/img/main_img.jpg')}}" width="100%">
        </header>
    </div>
    <div class="row">

        <div class="col-3" style="margin: 20px  50px 20px 20px; padding: 20px; border: 1px black solid;">
            <aside>
            @section('sidebar')
                <h3>我是section塞巴</h3>
            @show
            </aside>
        </div>

        <div class="col" style="margin: 20px 0;">
            @yield('content')
        </div>

    </div>

    <div class="row text-center" style="margin: 30px 0; background-color: #98cbe8">
        <footer class="col-md-12">
            頁尾<br>(頁腳)
        </footer>
    </div>
</div>




@section('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
@show

</body>
</html>