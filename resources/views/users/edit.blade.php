<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ユーザー編集画面</title>
</head>
<body>
  <div class="l-contents">
    <div class="l-contents__in">
      <div class="p-user_edit">
        <div class="p-user_edit__box u-ta-c">
          <h1 class="c-heading">ユーザー情報更新</h1>
          <form name="registform" action="{{ action('UsersController@update') }}" method="post" >
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