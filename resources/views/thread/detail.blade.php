<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<title>スレッド詳細画面</title>
	</head>
	<body>
		<header class="l-header">
      <h1 class="c-heading c-heading--header">BE研修サイト</h1>
      <nav class="l-navi">
        <ul class="l-navi__list">
          <li><a href="#" class="l-navi__list-item">スレッド一覧</a></li>
          <li><a href="#" class="l-navi__list-item">スレッド作成</a></li>
          <li><a href="#" class="l-navi__list-item">ログアウト</a></li>
       </ul>
     </nav>
		</header>
		<main class="l-contents">
      <div class="l-contents__in">
        <div class="p-thread_detail">
          <section class="p-thread_detail__list-item"> 
            <div class="p-thread_detail__detailbox">
              <p class="p-thread_detail__date">作成日時：{{$thread_info->created_at}}</p>
              <p class="p-thread_detail-item__user">作成者：{{$thread_info->create_user}}</p>
            </div>
            <h2 class="p-thread_detail__title">{{$thread_info->title}}</h2>
            <div class="p-thread_detail__content_box">
              <p class="p-thread_detail__contents">{{$thread_info->contents}}</p>
            </div>
          </section>
          <section class="p-thread_detail__comment-listbox">
            <ul class="p-thread_detail__comment-list">
              @foreach ($thread_detail as $detail)
              <li class="p-thread_detail__list">
                <p class="p-thread_detail__comment-name">投稿者：{{$detail->comment_user}}</p>
                <div class="p-thread_detail__commment_box">
                  <p class="p-thread_detail__comment"> {{$detail->comment}}  </p>
                </div>
              </li>
              @endforeach
            </ul>      
          </section>
          <section class="p-thread_detail__commentbox">
            <form action="{{ action('ThreadCommentController@store') }}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="thread_id" value="{{$thread_info->id}}">
              <textarea name="comment" class="c-textarea c-textarea--comment" cols="20" rows="5" placeholder="コメント入力欄"></textarea>
              <div class="p-login__create_user">
                <button type="submit" value="send" name="action" class="c-button">投稿</button>
              </div>
            </form>
          </section>
      
        </div>
      </div>
    </main>
    
		<footer class="l-footer">
      &copy; 2021年<script>new Date().getFullYear()>2021&&document.write("-"+new Date().getFullYear());</script>BE研修サイト
		</footer>
	</body>
	<script src="js/jquery.min.js"></script>
</html>