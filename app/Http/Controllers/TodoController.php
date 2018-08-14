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

    public function guide($group,$num) //傳GP跟1進來
    {
        //將navbar的選項丟進陣列 若有新增 直接新增陣列即可(注意索引)
        $guide['GP'][0]="輔導人員管理模組";
        $guide['GP'][1]="值班管理";
        $guide['GP'][2]="人員簡介";
        $guide['GP'][3]="指派個管";
        $guide['GP'][4]="兼任帳號";

        $guide['CM'][0]="諮商總管";
        $guide['CM'][1]="記錄管理";
        $guide['CM'][2]="預約時間";
        $guide['CM'][3]="空間管理";
        $guide['CM'][4]="議題管理";
        $guide['CM'][5]="滿意度";

        $guide['TM'][0]="轉銜管理";
        $guide['TM'][1]="新開發";
        $guide['TM'][2]="處理中";
        $guide['TM'][3]="查詢";

        $guide['T'][0]="心理測驗模組";
        $guide['T'][1]="測驗派案";
        $guide['T'][2]="測驗紀錄";
        $guide['T'][3]="測驗維護";
        $guide['T'][4]="測驗說明";

        $guide['GC'][0]="院 / 系個案管理模組";
        $guide['GC'][1]="個管派案";
        $guide['GC'][2]="關懷追蹤";

        $guide['C'][0]="諮商管理模組";
        $guide['C'][1]="接案管理";
        $guide['C'][2]="記錄管理";

        $guide['R'][0]="諮商總管";
        $guide['R'][1]="個案查詢";
        $guide['R'][2]="業務概況";
        $guide['R'][3]="諮商統計";
        $guide['R'][4]="院系分析";
        $guide['R'][5]="諮商趨勢";
        $guide['C'][0]="諮商管理模組";
        $guide['C'][1]="接案管理";
        $guide['C'][2]="記錄管理";

        $guide['R'][0]="諮商總管";
        $guide['R'][1]="個案查詢";
        $guide['R'][2]="業務概況";
        $guide['R'][3]="諮商統計";
        $guide['R'][4]="院系分析";
        $guide['R'][5]="諮商趨勢";

        //dd($guide[$group][0].$guide[$group][$num]);
        return view($group.'.'.$group.'_'.$num,compact('guide','group','num'));
        // 假設是傳GP_1過來, 回傳view(GP.GP_1)(GP資料夾裡的GP_1)
        // 後面compact('guide','group','num') 將$guide陣列、group、num傳回給view
        // view再用以下兩行將變數傳給master master接收後就可列出麵包屑
        // @section('bread1',$guide[$group][0])
        // @section('bread2',$guide[$group][$num])
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
