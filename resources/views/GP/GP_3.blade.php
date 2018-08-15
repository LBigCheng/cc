@extends('layouts.master')

@section('bread1',$guides[$group][0])
@section('bread2',$guides[$group][$num])

@section('content')

<?php
    $year = date('Y')-1911;
    $month = date('m');

    if($month < 8 && $month >1){
        $semester = $year-1 . "_" . 2;
    }else{
        $semester = $year . "_" . 1;
    }
?>

    <div class="panel panel-info">
          <div class="panel-heading" style= "text-align:center">
                <h3 class="panel-title" >
                    <span style="margin-right: 20px">指派個管</span>
                    <button type="button" class="btn btn-primary">更新</button>
                </h3>



          </div>
          <div class="panel-body" style= "text-align:center">   <!--todo製作學院超連結(彈出視窗)，A老師須由contr~匯進來-->
            <h4>{{$semester}}院個管<br><br></h4>
            <a>工程學院</a> ： A老師<br>
            <a>電資學院</a> ： A老師<br>
            <a>管理學院</a> ： A老師<br>
                (其餘類推)<br>
            <a>未列學院</a> ： A老師<br>
          </div>
    </div>

@endsection
