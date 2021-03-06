@extends('layouts.master')


@section('bread1',$guides[$group][0])
@section('bread2',$guides[$group][$num])

@section('content')

<?php
    print_r($guides[$group][$num]);
?>
<div class="container-fluid">
    <div class="row" style="text-align: center;">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="#">值班表</a>
                    <a href="#">人員值班設定</a>
                    <a href="#">空間值班設定</a>
                </h3>
            </div>
        <div class="panel-body">
                【值班表】<!-- 這個千萬不要忘記 -->
        <table class="table table-bordered">

            <thead align="center">

            </thead>
            <tbody>

                <tr>
                    <td style="width: 66px;" colspan="2"></td>
                    <td style="width: 15px;">上一週</td>
                    <td style="width: 45px;" colspan="3">五月</td>
                    <td style="width: 15px;">下一週</td>
                </tr>
                <tr>
                    <td style="width: 66px;" colspan="2">日期</td>
                    <?php
                        if(date("l")=="Monday"){
                            for($i=0;$i<=4;$i++){
                                echo "<td style=\"width: 15px;\">".date("d",strtotime("+$i day"))."</td>";
                            }
                        }else{
                            for($i=0;$i<=4;$i++){
                                echo "<td style=\"width: 15px;\">".date("d",strtotime("last Monday + $i day"))."</td>";
                            }
                        }
                    ?>

                    <!-- <td style="width: 15px;">&nbsp;</td>
                    <td style="width: 15px;">&nbsp;</td>
                    <td style="width: 15px;">&nbsp;</td>
                    <td style="width: 15px;">&nbsp;</td>
                    <td style="width: 15px;">&nbsp;</td>  -->

                </tr>
                <tr>
                    <td style="width: 66px;" colspan="2">星期</td>
                    <td style="width: 15px;">一</td>
                    <td style="width: 15px;">二</td>
                    <td style="width: 15px;">三</td>
                    <td style="width: 15px;">四</td>
                    <td style="width: 15px;">五</td>
                </tr>

                <?php
                    for($i=1;$i<=14;$i++){
                        //第一列
                        echo "<tr>";
                        $jj=sprintf("%02d",$i);//將節數變為兩位數 不足補0
                        echo "<td style=\"width: 51px;\" rowspan=\"3\">第 $jj 節</td>";
                        echo "<td style=\"width: 15px;\">R</td>";
                        for($j=1;$j<=5;$j++){
                            echo "<td style=\"width: 15px;\"></td>";
                        }

                        echo "</tr>";

                        //第二三列

                        $abc=array('S','T');
                        for($z=1;$z<=2;$z++){
                            echo "<tr>";
                            echo "<td style=\"width: 15px;\">".$abc[$z-1]."</td>";//讀取陣列的S或T值
                            for($k=1;$k<=5;$k++){
                                echo "<td style=\"width: 15px;\"></td>";
                            }
                            echo "</tr>";
                        }
                    }
                ?>
                <!-- 上面這裡是PHP做的表格 -->
            </tbody>
        </table>


              </div>
        </div>




    </div>



</div>

@endsection
