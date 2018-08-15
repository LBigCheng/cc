@extends('layouts.master')

@section('bread1',$guides[$group][0])
@section('bread2',$guides[$group][$num])

@section('content')

<script>
    $(document).ready(function () {
        $("#btn1").click(function (e) {
            $("#GP4").load("/GP_4_1");
        });
    });

</script>
    <div class="panel panel-info">
          <div class="panel-heading">
                <h3 class="panel-title" style="text-align:center;">【兼任帳號】</h3>
          </div>
          <div class="panel-body" id="GP4">
                【使用中】<button id="btn1">新增</button> <button>重啟停用帳號</button><br>
                <!-- todo 重啟停用帳號要設定浮出視窗 -->

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>使用人</th>
                            <th>帳號名稱</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- todo 停用帳號要設定浮出視窗 -->
                        <tr>
                            <td>P1老師</td>
                            <td>aaa</td>
                            <td><button>修改</button></td>
                            <td><button>停用</button></td>
                        </tr>
                        <tr>
                                <td>待新增</td>
                                <td>待新增</td>
                                <td><button>修改</button></td>
                                <td><button>停用</button></td>
                            </tr>
                    </tbody>
                </table>

          </div>
    </div>


@endsection
