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
    .breadcrumb> li + li:before{
        content:">";
    }
    </style>

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
            <a class="navbar-brand" href="index.html">輔導個案管理</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">學生模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">預約個別諮商</a>
                        </li>
                        <li>
                            <a href="#">預約心理測驗</a>
                        </li>
                        <li>
                            <a href="#">查詢紀錄</a>
                        </li>
                        <li>
                            <a href="#">更新聯絡資訊</a>
                        </li>
                        <li>
                            <a href="#">諮商滿意度</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">輔導人員管理模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="GP_1.html">值班管理</a>
                        </li>
                        <li>
                            <a href="GP_2.html">人員簡介</a>
                        </li>
                        <li>
                            <a href="GP_3.html">指派個管</a>
                        </li>
                        <li>
                            <a href="GP_4.html">兼任帳號</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">諮商總管
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="CM_1.html">記錄管理</a>
                        </li>
                        <li>
                            <a href="CM_2.html">預約時間</a>
                        </li>
                        <li>
                            <a href="CM_3.html">空間管理</a>
                        </li>
                        <li>
                            <a href="CM_4.html">議題管理</a>
                        </li>
                        <li>
                            <a href="CM_5.html">滿意度</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">轉銜管理
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="TM_1.html">新開發</a>
                        </li>
                        <li>
                            <a href="TM_2.html">處理中</a>
                        </li>
                        <li>
                            <a href="TM_3.html">查詢</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">心理測驗模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="T_1.html">測驗派案</a>
                        </li>
                        <li>
                            <a href="T_2.html">測驗記錄</a>
                        </li>
                        <li>
                            <a href="T_3.html">測驗維護</a>
                        </li>
                        <li>
                            <a href="T_4.html">測驗說明</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">院 / 系個案管理模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="GC_1.html">個管派案</a>
                        </li>
                        <li>
                            <a href="GC_2.html">關懷追蹤</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">諮商管理模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="C_1.html">接案管理</a>
                        </li>
                        <li>
                            <a href="C_2.html">紀錄管理</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">查詢報表模組
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="R_1.html">個案查詢</a>
                        </li>
                        <li>
                            <a href="R_2.html">業務概況</a>
                        </li>
                        <li>
                            <a href="R_3.html">諮商統計</a>
                        </li>
                        <li>
                            <a href="R_4.html">院系分析</a>
                        </li>
                        <li>
                            <a href="R_5.html">諮商趨勢</a>
                        </li>
                    </ul>
                </li>

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

    
    <ol class="breadcrumb">
        <li>
            <a href="index.html">首頁</a>
        </li>
        <li class="active">輔導個案管理</li>
        <li class="active">指派個管</li>
    </ol>
    

</body>

</html>