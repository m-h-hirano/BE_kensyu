<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThreadInfo;
use App\ThreadComment;
use Illuminate\Support\Facades\Auth; //追加
use Illuminate\Support\Facades\DB;

class ThreadCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $thread_info = ThreadInfo::find($request->id);
    //   $thread_detail =  DB::table('threadcomments')->get();
      $thread_detail = DB::table('threadcomments')->where('thread_id', $request->id)->get();
      //var_dump($thread_detail);
      return view('thread.detail', compact('thread_info','thread_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $thread_detail = new ThreadComment(); 
        $thread_detail->comment = $request->comment;
        $thread_detail->comment_user = Auth::user()->name;
        $thread_detail->thread_id = intval($request['thread_id']);
        $thread_detail->save();
        return redirect('thread');  //リダイレクト
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
