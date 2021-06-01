<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThreadInfo;
use Illuminate\Support\Facades\Auth; //追加
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ValidateSample; 
use Validator;

class ThreadInfoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    } 

    public function index(Request $request)
    {
      $thredlistitem = DB::table('threadinfo')->paginate(10);
      //$thredlistitem = DB::table('threadinfo')->where('create_user', Auth::user()->name)->get(); //自分の名前で検索
      
      return view('thread.index', compact('thredlistitem'));
    }
    public function create(){
      return view('thread.create');
    }

    //ValidateSample $request
    public function store(Request $request)
    { 
      $validator = Validator::make($request->all(), [
        'thread_title' => 'required|string|',
        'thread_content' => 'required',
        
      ]);
        // バリデーションエラーだった場合
      if ($validator->fails()) {
        return redirect('/thread/create')
            ->withErrors($validator)
            ->withInput();
      }
      else{
        $thread = new ThreadInfo(); 
        $thread->title    = $request->thread_title;
        $thread->contents = $request->thread_content;
        $thread->create_user = Auth::user()->name;
        $thread->save();
        return redirect('thread');  //リダイレクト
      }
    }

    public function mythread()
    {
      $thredlistitem = DB::table('threadinfo')->where('create_user', Auth::user()->name)->get(); //自分の名前で検索
      return view('thread.index', compact('thredlistitem'));
    }
}
