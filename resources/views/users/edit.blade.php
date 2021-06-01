<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ユーザー編集画面</title>
</head>
<body>
  <header class="l-header">
    <h1 class="c-heading c-heading--header">BE研修サイト</h1>
    <nav class="l-navi">
      <ul class="l-navi__list">
        <li><a href="/thread" class="l-navi__list-item">スレッド一覧</a></li>
        <li><a href="/thread/mythread" class="l-navi__list-item">マイスレッド一覧</a></li>
        <li><a href="/thread/create" class="l-navi__list-item">スレッド作成</a></li>
        <li><a href="/user/edit" class="l-navi__list-item">ユーザー情報更新</a></li>
        <li><a href="/auth/logout" class="l-navi__list-item">ログアウト</a></li>
     </ul>
   </nav>
  </header>
  <div class="l-contents">
    <div class="l-contents__in">
      <div class="p-user_edit">
        <div class="p-user_edit__box u-ta-c">
          <h1 class="c-heading">ユーザー情報更新</h1>
          @if ($errors->any())
              <div class="errors">
                <ul class="p-error__list">
                  @foreach ($errors->all() as $error)
                    <li>{{ '※' . $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
          <form name="registform" action="{{ action('UsersController@update') }}" method="post" >
            @csrf
            <input type="text" name="name" class="c-input u-m-t-30 u-m-b-30" size="30"value="{{$user->name}}">
            <input type="text" name="email" class="c-input u-m-b-30" value="{{$user->email}}">
            <div class="p-login__create_user">
              <button type="submit" value="send" class="c-button">更新</button>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>