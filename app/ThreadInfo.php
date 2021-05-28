<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ThreadInfo extends Model
{
  protected $table = 'threadinfo';


    //スレッド一覧に必要な画面取得
    static function Get_ThreadList(){
        $threadlist_item = DB::table('threadinfo')->select('id','title', 'create_user','created_at')->get();
        return $threadlist_item;
    }
    //スレッド詳細画面に必要なデータ
    static function Get_ThreadList_Detail(){
        $threadlist_item = DB::table('threadinfo')->select('id','title','contents','create_user','created_at')->get();
        return $threadlist_item;
    }
    
}
