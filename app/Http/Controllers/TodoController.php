<?php

namespace App\Http\Controllers;

use App\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function GP($group,$num) //傳GP跟1進來
    {
        //將navbar的選項丟進陣列 若有新增 直接新增陣列即可(注意索引)
        $student['GP'][0]="輔導人員管理模組";
        $student['GP'][1]="值班管理";
        $student['GP'][2]="人員簡介";
        $student['GP'][3]="指派個管";
        $student['GP'][4]="兼任帳號";

        $student['CM'][0]="諮商總管";
        $student['CM'][1]="記錄管理";
        $student['CM'][2]="預約時間";
        $student['CM'][3]="空間管理";
        $student['CM'][4]="議題管理";
        $student['CM'][5]="滿意度";

        $student['TM'][0]="轉銜管理";
        $student['TM'][1]="新開發";
        $student['TM'][2]="處理中";
        $student['TM'][3]="查詢";

        $student['T'][0]="心理測驗模組";
        $student['T'][1]="測驗派案";
        $student['T'][2]="測驗紀錄";
        $student['T'][3]="測驗維護";
        $student['T'][4]="測驗說明";

        $student['GC'][0]="院 / 系個案管理模組";
        $student['GC'][1]="個管派案";
        $student['GC'][2]="關懷追蹤";

        $student['C'][0]="諮商管理模組";
        $student['C'][1]="接案管理";
        $student['C'][2]="記錄管理";

        $student['R'][0]="諮商總管";
        $student['R'][1]="個案查詢";
        $student['R'][2]="業務概況";
        $student['R'][3]="諮商統計";
        $student['R'][4]="院系分析";
        $student['R'][5]="諮商趨勢";

        //dd($student[$group][0].$student[$group][$num]);
        return view($group.'.'.$group.'_'.$num,compact('student','group','num'));
        // 假設是傳GP_1過來, 回傳view(GP.GP_1)(GP資料夾裡的GP_1)
        // 後面compact('student','group','num') 將$student陣列、group、num傳回給view
        // view再用以下兩行將變數傳給master master接收後就可列出麵包屑
        // @section('bread1',$student[$group][0])
        // @section('bread2',$student[$group][$num])
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(todo $todo)
    {
        //
    }
}
