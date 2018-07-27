<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>

<nav class="navbar navbar-default">
    <div><img src="{{ asset('image/logo.jpg') }}"></div>

    {{--<div align="left" style="float:left" style="background-image:url({{ asset('image/logo.jpg') }});"></div>--}}
    <div class="container-fluid">
        <div class="navbar-header" style="margin: 0px auto;">
            <h1><a href="{{route('crud.index')}}" style="font-family:Microsoft JhengHei;">新天地國際實業股份有限公司-資訊軟體授權管理V2</a></h1>
        </div>
    </div>
</nav>

<br>
<div class="container-fluid">
    @yield('content')
</div>
</body>

</html>