<html>
<head>
    <title>站名 - @yield('title', '主板')</title>
</head>
<body>
@section('sidebar')
    <p>我是section塞巴</p>
@show

<div class="container">
    @yield('content')
</div>

</body>
</html>