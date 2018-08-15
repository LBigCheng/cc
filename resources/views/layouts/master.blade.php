<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>輔導個案管理</title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    {{-- ↓和jQuery ui相關↓ --}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet"
    href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
    .bigbtn{
        margin:5px
    }
    .panel-title a{
        margin:20px;
    }
    .breadcrumb> li + li:before{
        content:">";
    }
    </style>

    <SCRIPT>
        $(document).ready(function () {
            $("#aaa").load("couer.php");
        });
    </SCRIPT>

</head>

<body>

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">輔導個案管理</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                {{-- guide是從TodoController@guides拿過來的陣列
                     $key指的是 S、GP、CM...等等
                     $guide是對應到的下拉選單內容
                --}}
                @foreach($guides as $key => $guide)
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$guide[0]}} {{$key}}
                        <b class="caret"></b>{{-- 箭頭符號 --}}
                    </a>
                    <ul class="dropdown-menu">
                        {{-- for跑到$guide的最大索引值 停止執行 --}}
                        @for($i=1;$i<=count($guide)-1;$i++)
                                <li>
                                    <a href="{{$key}}_{{$i}}">．{{$guide[$i]}}</a>
                                </li>
                        @endfor
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>


    <script>
    </script>

    <ol class="breadcrumb">
        <li>
            <a href="/">首頁</a>
        </li>
        @if($group!="0")
            <li>
                <a href="">@yield('bread1')</a>
                {{-- 其實直接用php echo guid陣列 索引[group][num] 就可以拿到值了 結果傳老半天--}}
            </li>
            <li>
                <a href="{{$group}}_{{$num}}">@yield('bread2')</a>
            </li>
        @endif
    </ol>

    @yield('content')

</body>

</html>
