@extends('layouts.master')

@section('bread1',$guides[$group][0])
@section('bread2',$guides[$group][$num])

@section('content')

    <div class="panel panel-info" >
          <div class="panel-heading" style="text-align:center;">
                <h3 class="panel-title">【人員簡介】</h3>
          </div>
          <div class="panel-body" style="text-align:center;" id="GP2">
                <form action="">
                    <select name="" id="" style="margin-right:20px;">
                        <option value="">A老師</option>
                    </select>
                    <input type="button" value="更新" onclick=upd() class="btn btn-sm btn-warning">
                </form>
                <br>
                簡介連結：開 <button onclick=changetip()>設定</button>
                <br>
                <u onclick=slide() style="cursor:pointer">收合說明</u>
                <br>
                <p id="tip">
                此功能提供學生預約個別諮商時，<br><!-- todo 做浮動視窗可更改內容(P.48) -->
                可點選輔導人員姓名，查看人員簡介。
                </p>
          </div>
    </div>
<script>
    function upd(){
        $("#GP2").load("GP_2_1");
    }
    function slide(){
        $("#tip").slideToggle();
    }
    function changetip() {
        $( "#tip" ).dialog();
    }
</script>
@endsection
