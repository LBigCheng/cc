<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


</head>
<body>
    <?php
        $Arr=array('a','b','c');
        $i=count($Arr);
            for($j=0 ; $j<$i ; $j++){
                echo "1".$j."圈".$Arr[$j]."<br>";
            }
        echo(strtotime("now") . "<br>");
        echo date("Y-M-D")."<br>";
        echo $time1 = '2012-11-14 21:16:16';// 指定時間
        echo "<br>";
        echo date("Y-m-d H:i:s",strtotime($time1."+1 sec")); // 加一秒
        echo "<br>";
        echo strtotime($time1."+1 sec");
        echo "<br>";
        echo date("y-m-d",strtotime($time1."+1 sec"));
        echo "<br>";
        
        if(date("l")=="Thursday"){
            echo date("d")."ㄌㄩㄝ";
            echo date("d",strtotime('+1 day'))."ㄌㄩㄝ";
            echo date("d",strtotime('+2 day'))."ㄌㄩㄝ";
            echo date("d",strtotime('+3 day'))."ㄌㄩㄝ";
            echo date("d",strtotime('+4 day'))."ㄌㄩㄝ";
        }else{
            echo date("d",(strtotime("last Monday"))). "嗨";
            echo date("d",(strtotime("last Monday + 1 day"))). "嗨";
            echo date("d",(strtotime("last Monday + 2 day"))). "嗨";
            echo date("d",(strtotime("last Monday + 3 day"))). "嗨";
            echo date("d",(strtotime("last Monday + 4 day"))). "嗨";
        }
        
    ?>






    
</body>
</html>