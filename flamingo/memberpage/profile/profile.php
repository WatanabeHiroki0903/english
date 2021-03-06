
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" prefix="og: http://ogp.me/ns#"><!--<![endif]-->
<head>

<!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="UTF-8">
    <title>Flamingo inc.</title>
    <meta name="description" content="語学アプリ「フラミンゴ」は、ネイティブを呼んで、レッスンを受けるためのアプリです。先生とチャットをしたり、またカフェで英会話レッスンを受けることができます。">
    <meta name="author" content="Flamingo inc.">
    <meta name="keywords" content="">

<!-- Mobile & IE Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- OG META
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta property="og:title" content="Flamingo" >
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="ふらっとみんなで語学">
    <meta property="og:url" content="http://app-flamingo.com/" >
    <meta property="og:locale" content="ja_JP">
    <meta property="fb:admins" content="">
    <meta property="og:url" content="http://app-flamingo.com/company">
    <meta property="og:site_name" content="Flamingo">
    <!-- <meta property="og:type" content="blog"> -->
    <meta property="og:image" content="images/common/logo_ogp.png">

<!-- Twitter
  ______________________________ -->
    <meta name="twitter:card" content="app">
    <meta name="twitter:description" content="ネイティブと会える語学アプリ、フラミンゴ！お気に入りのカフェでネイティブと外国語を学べるよ。まずは無料のチャットを楽しんで (ﾌ・θ・)ﾌ">
    <meta name="twitter:app:country" content="JP">
    <meta name="twitter:app:name:iphone" content="Flamingo（フラミンゴ）ふらっとみんなで語学！">
    <meta name="twitter:app:id:iphone" content="1029428764">
    <meta name="twitter:app:url:iphone" content="https://itunes.apple.com/jp/app/flamingo-furattominnade-yu/id1029428764?mt=8">


<!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="../../css/style.css">

<!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="lib/useragent.js"></script>
    <script src="js/app.js"></script>

<!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="images/common/apple-touch-icon-precomposed.png">
</head>
<body>
<div>
    <header class="l-header">
    <div class="l-header-inner clearfix">
        <div class="header-logo">
            <a href="sample.php">
                <img src="../../images/images.png" alt="online英会話ロゴ">
            </a>
        </div>
        <!--未来のために<div class="header-nav-border">
            <span></span>
            <span></span>
            <span></span>
        </div>-->
        <nav class="header-nav">
            <ul>
                <li><a href="../index.php" title="">TOP PAGE</a></li>
                <li><a href="../message.php" title="">MESSAGE</a></li>
                <li><a href="index.php" title="">PROFILE</a></li>
                <li><a href="../help.php" title="">HELP</a></li>
                <li><a href="../../index.php" title="">LOGOUT</a></li>
            </ul>
        </nav>
    </div>
</header><!-- /header -->
    <main class="l-all-contents">
        <br><br><br><br><br>
    <div class="profile_area">
        <div class="left_profile">
            <img src="" alt="プロフィール" width="100px" height="100px">
            <div class="left_profile_menu">
                 <ul>
                     <li><a href="index.php">基本情報</a></li>
                     <li><a href="profile.php">プロフィール</a></li>
                 </ul>
            </div>
        </div>
        <div class="main_profile">
            <div class="main_profile_block">
                <div class="profile_title">
                    <h1 style="color:#484848;padding:18px 0 0 10px;">プロフィール</h1>
                </div>
                <div class="profile_content">

                </div>
            </div>
            <button value="変更する">変更する</button>
        </div>
    </div>


        
<!-- <script src="js/anchor_link.js"></script>Header pagetop-->
<script>
    (function($){

    $('a[href^="#"]').on('click',function(){
        // スクロールの速度
    let speed = 400; // ミリ秒
    // アンカーの値取得
    let href= $(this).attr('href');
    // 移動先を取得
    let target = $(href === '#' || href === '' ? 'html' : href);
    // 移動先を数値で取得
    let position = target.offset().top - 60;
    // スムーススクロール
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
    })

    if(_ua.Mobile){
        $('.js-insert-seach-view').removeClass('js-not-render')
        $('.top-main-searchbar').append($('.js-insert-seach-view')[0])
    }else{
        $('.js-insert-form').removeClass('js-not-render')
        $('.top-main-searchbar').append($('.js-insert-form')[0])
    }

    // 検索窓をクリックで検索ページをフェードイン
    $('.js-insert-seach-view').on('touchend',function(){
        $('.js-fade-search-view').fadeIn()
    })

    // 検索窓をクリックで検索ページをフェードイン
    $('.cancel_button').on('touchend',function(){
        $('.js-fade-search-view').fadeOut()
    })

    // search pageで検索を押したら
    $('.search_button').on('touchend',function(){
        var place = $('select[name=search-place] option:selected').val(),
                lang = $('select[name=search-lang] option:selected').val()

        if(lang != 'select-lang'){
            if(place != 'select-place'){
                window.location.href = "http://app-flamingo.com/teacher/?" + $.param({lang: lang, place: place})
            }else{
                window.location.href = "http://app-flamingo.com/teacher/?" + $.param({lang: lang})
            }
        }else{
            return false
        }
    })


})(jQuery)
</script>
</body>
</html>