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


                @foreach($guides as $key => $guide)
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$guide[0]}}
                        <b class="caret"></b>{{-- 箭頭符號 --}}
                    </a>
                    <ul class="dropdown-menu">
                        @for($i=1;$i<=count($guide)-1;$i++)
                                <li>
                                    <a href="{{$key}}_{{$i}}">{{$guide[$i]}}</a>
                                </li>
                        @endfor
                    </ul>
                </li>
                @endforeach

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
