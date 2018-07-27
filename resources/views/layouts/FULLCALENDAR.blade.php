<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('style')
    <title>行事曆</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src='fullcalendar/fullcalendar.js'></script>
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
    @yield('content')
    </body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@yield('script')
</html>