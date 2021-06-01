<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>ログイン</title>
</head>
<body>
  <main class="l-contents">
    <div class="l-contents__in">
      <div class="p-login">
        <div class="p-login__box u-ta-c">
          <h1 class="c-heading">ログイン</h1>
          @if ($errors->any())
          <div class="errors">
            <ul class="p-error__list">
              @foreach ($errors->all() as $error)
                <li>{{ '※' . $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
          <form name="loginform" action="/auth/login" method="post" >   
            {{csrf_field()}}
            <input type="text" name="email" class="c-input u-m-t-50 u-m-b-50" size="30" placeholder="メールアドレス" value="{{old('email')}}">
            <input type="password" name="password" class="c-input u-m-b-50" placeholder="パスワード">
            <div class="p-login__btnbox">
              <a href="/auth/register">ユーザー作成</a>
              <button type="submit" value="send" class="c-button">ログイン</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <!-- <footer class="l-footer">
    &copy; 2021年<script>new Date().getFullYear()>2021&&document.write("-"+new Date().getFullYear());</script>フッターのタイトル
  </footer> -->
</body>
</html>