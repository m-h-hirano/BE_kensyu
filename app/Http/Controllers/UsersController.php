<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//  use App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; //追加
use Validator;

class UsersController extends Controller
{
    //
    // protected $user;

//     public function __construct(User $user)
// {
//     $this->user = $user;
// }
  public function __construct()
  {
    $this->middleware('auth');
  } 


  //既存のユーザーデータの取得
  public function index(){
    $user = Auth::user();
    return view('users.edit',[ 'user' => $user ]);
  }
  public function create(){



  }
  
  //userデータの編集
  public function edit() {
    return view('users.edit', ['user' => Auth::user() ]);
  }

  //usersデータの更新
  public function update(Request $request) {

    $validator = Validator::make($request->all(), [
      'name' => 'required|string|',
      'email' => 'required|email',
      
    ]);
    if ($validator->fails()) {
      return redirect('/users/edit')
          ->withErrors($validator)
          ->withInput();
    }
    else{
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

}
