<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//  use App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; //追加

class UsersController extends Controller
{
    //
    // protected $user;

//     public function __construct(User $user)
// {
//     $this->user = $user;
// }



  //既存のユーザーデータの取得
  public function index(){
    $user = Auth::user();
    return view('users.edit',[ 'user' => $user ]);
  }
  
  //userデータの編集
  public function edit() {
    return view('users.edit', ['user' => Auth::user() ]);
  }

  //usersデータの更新
  public function update(Request $request) {
    $user_form = $request->all();
    $user = Auth::user();
    //不要な「_token」の削除
    unset($user_form['_token']);
    //保存
    $user->fill($user_form)->save();
    //リダイレクト
    return redirect('thread');
  }

}
