<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThreadInfo;
use Illuminate\Support\Facades\Auth; //追加
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ValidateSample; 

class ThreadInfoController extends Controller
{

    public function index()
    {
      $thredlistitem = DB::table('threadinfo')->paginate(10);
      return view('thread.index', compact('thredlistitem'));
    }

    //ValidateSample $request
    public function store(Request $request)
    //public function store(ValidateSample $request)
    { 
      $thread = new ThreadInfo(); 
      $thread->title    = $request->title;
      $thread->contents = $request->contents;
      $thread->create_user = Auth::user()->name;
      $thread->save();
      return redirect('thread');  //リダイレクト
    }
}
