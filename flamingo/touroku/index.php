
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
    <link rel="stylesheet" href="../css/style.css">

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
                <img height="30px" width="30px" src="../images/images.png" alt="online英会話ロゴ">
            </a>
        </div>
        <!--未来のために<div class="header-nav-border">
            <span></span>
            <span></span>
            <span></span>
        </div>-->
        <nav class="header-nav">
            <ul>
                <li><a href="index.php" title="">新規会員登録</a></li>
                <li><a href="../index.php#login-form" title="">ログイン</a></li>
                <li><a href="../index.php#top-about" title="">オンライン英会話とは</a></li>
                <li><a href="../index.php#features" title="">会員種別</a></li>
                <li><a href="../index.php#faq" title="">お問い合わせ</a></li>
            </ul>
        </nav>
    </div>
</header><!-- /header -->
    <main class="l-all-contents">
        <!--ここまで共通部分-->
        <br><br><br><br><br>
        <form action="confirm.php" method="post">
            <div class="touroku-form">
                <div class="touroku-title">
                    <h1 style="color:#484848;padding:18px 0 0 10px;">新規会員登録フォーム</h1>
                </div>
                <div class="touroku-area">
                        <table>
                            <tr>
                                <td>名</td>
                                <td></td>
                                <td><input type="text" name="firstname" placeholder="Taro"></td>
                            </tr>
                            <tr>
                                <td>姓</td>
                                <td></td>
                                <td><input type="text" name="lastname" placeholder="Yamada"></td>
                            </tr>
                            <tr>
                                <td>性別</td>
                                <td></td>
                                <td><select name="sex">
                                    <option value="man">男性</option>
                                    <option value="woman">女性</option>
                                    <option value="other">その他</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>生年月日</td>
                                <td></td>
                                <td>
                                    <select name="year">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>年
                                    <select name="month">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>月
                                    <select name="day">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>日
                                </td>
                            </tr>
                            <tr>
                                <td>メールアドレス</td>
                                <td></td>
                                <td><input type="text" name="mailaddress"></td>
                            </tr>
                            <tr>
                                <td>ユーザーid</td>
                                <td></td>
                                <td><input type="text" name="uid"></td>
                            </tr>
                            <tr>
                                <td>パスワード</td>
                                <td></td>
                                <td><input type="password" name="password"></td>
                            </tr>
                            <tr>
                                <td>パスワード(確認用)</td>
                                <td></td>
                                <td><input type="password" name="password2"></td>
                            </tr>
                            <tr>
                                <td>登録コース</td>
                                <td></td>
                                <td><input type="radio" name="course" value="basic" checked>ベーシック会員(無料)
                                    <input style="margin-left:30px;" type="radio" name="course" value="premium">プレミアム会員(月額980円)
                                </td>
                            </tr>
                            <tr>
                                <td>支払い方法</td>
                                <td></td>
                                <td><input type="radio" name="howtopay" value="credit">クレジットカード
                                    <input type="radio" name="howtopay" value="phone">ケータイ料金まとめて支払い
                                </td>
                            </tr>
                        </table>
                </div>
            </div>
            <input class="touroku-button" type="submit" value="登録する">
        </form>
        <div class="footer-space"></div>
        

        
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