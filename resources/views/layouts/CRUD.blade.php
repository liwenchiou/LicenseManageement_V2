<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('style')
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src='fullcalendar/fullcalendar.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        ul, ul li{
            list-style-type: none;
            margin:0;
            padding: 0;
            font-family:Microsoft JhengHei;
        }
        a{
            text-decoration: none;
            line-height: 2em;
            font-size: 1.2em;
            color: #333;
        }

        .nav{
            overflow: auto;
        }
        /*第一層選單*/
        .nav>ul>li{
            padding-left: 15px;
            line-height: 3.3em;
            border-bottom: solid 1px #333;
        }

        /*第二層選單*/
        .nav>ul>li>ul>li{
            padding-left: 15px;
            border-bottom: solid 1px #333;

        }.nav>ul>li>ul>li:first-child{
             border-top: solid 1px #333;
         }
        .nav>ul>li>ul>li:last-child{
            border: 0;
        }

        /*第三層選單*/
        .nav>ul>li>ul>li>ul>li{
            padding-left: 15px;
            border-bottom: solid 1px #333;
        }
        .nav>ul>li>ul>li>ul>li:first-child{
            border-top: solid 1px #333;
        }
        .nav>ul>li>ul>li>ul>li:last-child{
            border: 0;
        }

        .menu-plus{
            /*display: block;*/
            /*background: #333;*/
            color: #333 !important;
            padding: 2px 15px;
            /*margin-top: 2px;*/
            /*border-radius: 10px;*/
            float: right;
        }

        @media (min-width: 768px) {
            #nav-btn,.sub-menu{
                display: none;
            }
            .nav>.menu {
                display: block !important;
            }
            /*第一層選單*/
            .nav>ul>li{
                float: left;
                margin-left:15px;
                padding-left: 15px;
                line-height: 3.3em;
                border-bottom: solid 1px #333;
            }
        }
        @media (max-width: 768px) {
            .nav>ul,.sub-menu{
                display: none;
            }
        }
        </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        $(function(){
            var href = $(".nav>div>ul>li:has(ul)>a").attr('href');
            $(".nav>ul>li:has(ul)>a").after('<a href="'+href+'"" class="menu-plus">v</a>');//第二層
//            $(".nav>ul>li>ul>li:has(ul)>a").after('<a href="'+href+'"" class="menu-plus">+</a>');//第三層

            $(".nav>#nav-btn").click(function() {
                $(".nav>ul").slideToggle();
                return false;
            });
//
            $('.menu>li>.menu-plus').on('click', function(){
                $(this).text(function(i, v) {
                    return v === '^' ? 'v' : '^';
                })
                $(this).next('.sub-menu').slideToggle();
                return false;
            });
//
            $('.sub-menu>li>a').on('click', function(){
                $(this).text(function(i, v) {
                    return v === '^' ? 'v' : '^';
                })
//                $(this).next('.sub-menu').slideToggle();
//                return false;
            });
        })
    </script>
</head>

<body>

<nav class="navbar navbar-default">
    <div><img src="{{ asset('image/logo.jpg') }}"></div>

    {{--<div align="left" style="float:left" style="background-image:url({{ asset('image/logo.jpg') }});"></div>--}}
    <div class="container-fluid">
        <div class="navbar-header" style="margin: 0px auto;">
            <h1><a href="{{route('event.index')}}" style="font-family:Microsoft JhengHei;">新天地國際實業股份有限公司-資訊軟體授權管理V2</a></h1>
        </div>
    </div>
</nav>

<br>
<div class="container-fluid">
    {{--導航欄--}}

    <div class="nav">
        <a href="#" id="nav-btn">menu</a>
        <ul class="menu">
            <li><a href="{{ route('crud.index') }}"><i class="icon-camera"></i>授權管理</a>
                <ul class="sub-menu">
                    <li  class="end"><a href="{{ route('crud.create') }}">新增授權</a></li>
                </ul>
            </li>
            <li><a href="{{ route('company.index') }}"><i class="icon-photoshop"></i> 公司管理</a>
                <ul class="sub-menu">
                    <li class="end"><a href="{{ route('company.create') }}">新增公司</a></li>
                </ul>
            </li>
            <li><a href="{{ route('lisence.index') }}"><i class="icon-mobile"></i>授權項目管理</a>
                <ul class="sub-menu">
                    <li class="end"><a href="{{ route('lisence.create') }}">新增授權項目</a></li>
                </ul>
            </li>
            <li><a href="{{ route('event.index') }}"><i class="icon-mobile"></i>行事曆</a>
                <ul class="sub-menu">
                    <li class="end"><a href="{{ route('event.create') }}">新增行事曆</a></li>
                </ul>
            </li>

        </ul>
    </div>

    {{--<div align="left" style="float:left"><a class="btn btn-primary" href="{{ route('crud.create') }}" style="font-size: 18px;font-family:Microsoft JhengHei;">新增授權</a>--}}
        {{--<a class="btn btn-primary" href="{{ route('event.index') }}" style="font-size: 18px;font-family:Microsoft JhengHei;">行事曆</a></div>--}}
    {{--<div align="right"><a class="btn btn-primary" href="{{ route('company.index') }}"style="font-size: 18px;font-family:Microsoft JhengHei;">公司管理</a>--}}
        {{--<a class="btn btn-primary" href="{{ route('lisence.index') }}"style="font-size: 18px;font-family:Microsoft JhengHei;">授權項目管理</a></div>--}}

<br><br>
    @yield('content')
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@yield('script')
</html>