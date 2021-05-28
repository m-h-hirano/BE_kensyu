<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>ユーザー登録画面</title>
</head>
<body>
  <main class="l-contents">
    <div class="l-contents__in">
      <div class="p-create_user">
        <div class="p-create_user__box u-ta-c">
          <h1 class="c-heading">ユーザー作成</h1>
          <form name="registform" action="/auth/register" method="post" >
            {{csrf_field()}}
            <input type="text" name="name" class="c-input u-m-t-30 u-m-b-30" size="30" placeholder="名前"><span>{{$errors->first('name')}}</span>
            <input type="text" name="email" class="c-input u-m-b-30" size="30" placeholder="メールアドレス"><span>{{$errors->first('email')}}</span>
            <input type="password" name="password" class="c-input u-m-b-30" size="30" placeholder="パスワード"><span>{{$errors->first('password')}}</span>
            <input type="password" name="password_confirmation" class="c-input  u-m-b-30" size="30" placeholder="パスワード(確認)"><span>{{$errors->first('password')}}</span>
            <div class="p-login__create_user">
              <button type="submit" value="send" name="action" class="c-button">送信</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  {{-- <footer class="l-footer">
    &copy; 2021年<script>new Date().getFullYear()>2021&&document.write("-"+new Date().getFullYear());</script>フッターのタイトル
  </footer> --}}
</body>
</html>