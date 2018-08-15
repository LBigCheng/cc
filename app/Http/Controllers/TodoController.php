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

    public function guides($group,$num) //傳GP跟1進來
    {
        //將navbar的選項丟進陣列 若有新增 直接新增陣列即可(注意索引)

        $guides['S'][0]="學生模組";
        $guides['S'][1]="預約個別諮商";
        $guides['S'][2]="預約心理測驗";
        $guides['S'][3]="查詢紀錄";
        $guides['S'][4]="更新聯絡資訊";
        $guides['S'][5]="諮商滿意度";

        $guides['GP'][0]="輔導人員管理模組";
        $guides['GP'][1]="值班管理";
        $guides['GP'][2]="人員簡介";
        $guides['GP'][3]="指派個管";
        $guides['GP'][4]="兼任帳號";

        $guides['CM'][0]="諮商總管";
        $guides['CM'][1]="記錄管理";
        $guides['CM'][2]="預約時間";
        $guides['CM'][3]="空間管理";
        $guides['CM'][4]="議題管理";
        $guides['CM'][5]="滿意度";

        $guides['TM'][0]="轉銜管理";
        $guides['TM'][1]="新開發";
        $guides['TM'][2]="處理中";
        $guides['TM'][3]="查詢";

        $guides['T'][0]="心理測驗模組";
        $guides['T'][1]="測驗派案";
        $guides['T'][2]="測驗紀錄";
        $guides['T'][3]="測驗維護";
        $guides['T'][4]="測驗說明";

        $guides['GC'][0]="院 / 系個案管理模組";
        $guides['GC'][1]="個管派案";
        $guides['GC'][2]="關懷追蹤";

        $guides['C'][0]="諮商管理模組";
        $guides['C'][1]="接案管理";
        $guides['C'][2]="記錄管理";

        $guides['R'][0]="查詢報表模組";
        $guides['R'][1]="個案查詢";
        $guides['R'][2]="業務概況";
        $guides['R'][3]="諮商統計";
        $guides['R'][4]="院系分析";
        $guides['R'][5]="諮商趨勢";

        $guides['C'][0]="諮商管理模組";
        $guides['C'][1]="接案管理";
        $guides['C'][2]="記錄管理";
        //dd(array_divide($guides));
        //dd($guides[$group][0].$guides[$group][$num]);
        return view($group.'.'.$group.'_'.$num,compact('guides','group','num'));
        // 假設是傳GP_1過來, 回傳view(GP.GP_1)(GP資料夾裡的GP_1)
        // 後面compact('guides','group','num') 將$guides陣列、group、num傳回給view
        // view再用以下兩行將變數傳給master master接收後就可列出麵包屑
        // @section('bread1',$guides[$group][0])
        // @section('bread2',$guides[$group][$num])
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
