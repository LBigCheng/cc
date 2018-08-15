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

                {{-- foreach第一組放這 --}}
                {{-- todo --}}
                @foreach($guides as $guide)
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$guide[0]}}
                        <b class="caret"></b>{{-- 箭頭符號 --}}
                    </a>
                    <ul class="dropdown-menu">
                        {{-- 第二個foreach放這 --}}
                        {{-- @foreach($guide as $num)
                            @if($guide[0] != $num)
                                <li>
                                    <a href="#">{{$num}}</a>
                                </li>
                            @endif
                        @endforeach --}}
                        {{-- foreach第二組結尾 --}}
                        @for($i=1;$i<=count($guide)-1;$i++)
                                <li>
                                    <a href="#">{{$guide[$i]}}</a>
                                </li>
                        @endfor
                    </ul>
                </li>
                @endforeach
                {{-- foreach第一組結尾 --}}

                {{-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">輔導人員管理模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="GP_1">值班管理</a>
                        </li>
                        <li>
                            <a href="GP_2">人員簡介</a>
                        </li>
                        <li>
                            <a href="GP_3">指派個管</a>
                        </li>
                        <li>
                            <a href="GP_4">兼任帳號</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">諮商總管
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="CM_1">記錄管理</a>
                        </li>
                        <li>
                            <a href="CM_2">預約時間</a>
                        </li>
                        <li>
                            <a href="CM_3">空間管理</a>
                        </li>
                        <li>
                            <a href="CM_4">議題管理</a>
                        </li>
                        <li>
                            <a href="CM_5">滿意度</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">轉銜管理
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="TM_1">新開發</a>
                        </li>
                        <li>
                            <a href="TM_2">處理中</a>
                        </li>
                        <li>
                            <a href="TM_3">查詢</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">心理測驗模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="T_1">測驗派案</a>
                        </li>
                        <li>
                            <a href="T_2">測驗記錄</a>
                        </li>
                        <li>
                            <a href="T_3">測驗維護</a>
                        </li>
                        <li>
                            <a href="T_4">測驗說明</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">院 / 系個案管理模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="GC_1">個管派案</a>
                        </li>
                        <li>
                            <a href="GC_2">關懷追蹤</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">諮商管理模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="C_1">接案管理</a>
                        </li>
                        <li>
                            <a href="C_2">紀錄管理</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">查詢報表模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="R_1">個案查詢</a>
                        </li>
                        <li>
                            <a href="R_2">業務概況</a>
                        </li>
                        <li>
                            <a href="R_3">諮商統計</a>
                        </li>
                        <li>
                            <a href="R_4">院系分析</a>
                        </li>
                        <li>
                            <a href="R_5">諮商趨勢</a>
                        </li>
                    </ul>
                </li> --}}



            </ul>

            <!--
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Link</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Action</a>
                        </li>
                        <li>
                            <a href="#">Another action</a>
                        </li>
                        <li>
                            <a href="#">Something else here</a>
                        </li>
                        <li>
                            <a href="#">Separated link</a>
                        </li>
                    </ul>
                </li>
            </ul>
            -->
        </div>
        <!-- /.navbar-collapse -->
    </nav>


    <script>
    </script>

    <ol class="breadcrumb">
        <li>
            <a href="/">首頁</a>
        </li>
        <li>
            <a href="#">@yield('bread1')</a>
            {{-- 其實直接用php echo guid陣列 索引[group][num] 就可以拿到值了 結果傳老半天--}}
        </li>
        <li>
            <a href="#">@yield('bread2')</a>
        </li>
    </ol>

    @yield('content')

</body>

</html>
