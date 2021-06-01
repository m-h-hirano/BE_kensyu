<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<title>マイスレッド一覧画面</title>
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
		<main class="l-contents">
      <div class="l-contents__in">
        <div class="p-thread-list">
          <h1 class="c-heading">マイスレッド一覧</h1>
          <div class="p-thread-list__listbox">
            <ul class="p-thread-list__list">
              @foreach ($thredlistitem as $items)
                <li class="p-thread-list__list-item u-sdw u-sdw--list">
                  <div class="p-thread-list__detailbox">
                    <p class="p-thread-list__date">作成日時：{{ $items->created_at }}</p>
                    <p class="p-thread-list-item__user">作成者：{{ $items->create_user }}</p>
                  </div>
                  <h2 class="p-thread-list__title"><a href="/thread/detail/?id={{$items->id}}">{{ $items->title }}</a></h2>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
        {{-- <section class="c-paging">
          <div class="c-paging__box">
            {{ $thredlistitem->links('pagination::semantic-ui') }}
          </div>
        </section> --}}
      </div>
    </main>
		<footer class="l-footer">
      &copy; 2021年<script>new Date().getFullYear()>2021&&document.write("-"+new Date().getFullYear());</script>BE研修サイト
		</footer>
	</body>
	<script src="js/jquery.min.js"></script>
</html>