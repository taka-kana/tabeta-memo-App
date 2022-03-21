<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tabeta-Memo-App</title>
    <link rel="icon" href="{{ asset('../../../public/favcon.ico') }}">
    <meta name="description" content="サイトの概要文">

<!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<!-- 使用するフォント -->

<!-- resetCSS -->
<link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
<!-- WOW_animateCSS -->
    <link rel="stylesheet" href="/css/animate.css">
<!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--font awesome-->
<script src="https://kit.fontawesome.com/4d09afe394.js" crossorigin="anonymous"></script>
<!-- swipe -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- スタイルCSS -->
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                @if(Auth::check())
                <a href="{{ route('article.mymemo') }}">
                    <div class="header-logo"></div>
                </a>
                @else
                <a href="{{ route('article.index') }}">
                    <div class="header-logo"></div>
                </a>
                @endif

                <div class="header-items-wrapper">
                    <!-- ログイン後 -->
                    @if(Auth::check())
                    <div class="user-namespace">
                        こんにちは <br><a href="{{ route('user.mypage') }}">{{ Auth::user()->name }}</a> さん
                    </div>
                    <a href="{{ route('article.getCreate') }}" class="header-btn is-pc">投稿する</a>
                    <nav class="nav-wrapper is-pc">
                        <a href="" class="ac-btn">
                            メニュー
                        </a>
                        <ul class="nav-list">
                            <a href="{{ route('article.mymemo') }}"><li class="header-nav">my-memo</li></a>
                            <a href="{{ route('article.index') }}"><li class="header-nav">みんなの記録</li></a>
                            <a href="{{ route('user.mypage') }}"><li class="header-nav">ユーザー</li></a>
                            <a href="{{ route('user.logout') }}"><li class="header-nav">ログアウト</li></a>
                        </ul>
                    </nav>

                    <!-- ログイン前 -->
                    @else
                    <a class="header-btn" href="{{ route('user.getLogin') }}">ログイン</a>
                    <a class="header-btn"  href="{{ route('user.register') }}">新規登録</a>
                    <a href="{{ route('login.guest') }}" class="header-btn guest-btn" >ゲスト<br class="is-sp">ログイン</a>
                    @endif
                </div>
                <!-- ドロワーメニュー -->
@if(Auth::check())
<div class="drawer-icon is-sp">
    <div class="drawer_icon-bars">
        <div class="drawer_icon-bar1"></div>
        <div class="drawer_icon-bar2"></div>
        <div class="drawer_icon-bar3"></div>
    </div>
</div>
<div class="drawer-content is-sp">
    <div class="drawer-content_items">
        <div class="drawer-content_item"><a href="{{ route('article.mymemo') }}" class="drawer-nav">my-memo</a></div>
        <div class="drawer-content_item"><a href="{{ route('article.index') }}" class="drawer-nav">みんなの記録</a></div>
        <div class="drawer-content_item"><a href="{{ route('user.mypage') }}" class="drawer-nav">マイページ</a></div>
        <div class="drawer-content_item"><a href="{{ route('user.logout') }}" class="drawer-nav">ログアウト</a></div>
    </div>
</div>
<div class="drawer-back-ground is-sp"></div>
@endif

<!-- ドロワーメニュー終わり -->
            </div>
        </div>
    </header>

<main class="main">
    
@yield('content')

</main>
<!-- /.main -->
<footer class="footer">
    <p class="copyright">copyright ©️2021-2022:taka </p>
</footer>
<!-- /.footer -->
<!-- script -->
<script src="/js/wow.min.js"></script>
<script>new WOW().init();</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('/js/wow.min.js') }}"></script>
<script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>