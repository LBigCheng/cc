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
            <h4 style="text-decoration:underline;">工程學院 ： A老師</h5>
            <h4 style="text-decoration:underline;">電資學院 ： A老師</h5>
            <h4 style="text-decoration:underline;">管理學院 ： A老師</h5>
                (其餘類推)
            <h4 style="text-decoration:underline;">未列學院 ： A老師</h5>
          </div>
    </div>

@endsection
