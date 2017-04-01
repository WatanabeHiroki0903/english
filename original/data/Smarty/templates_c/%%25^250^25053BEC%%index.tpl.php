<?php /* Smarty version 2.6.30, created on 2017-04-01 17:40:28
         compiled from C:%5Cxampp%5Chtdocs%5Cdemo_site%5Coriginal%5Cdata%5CSmarty%5Ctemplates%5Cindex.tpl */ ?>
<main class="l-all-contents">
        <div id="login-form" class="top-mainvisual clearfix">
            <div class="top-mainvisual-inner">
                <div class="top-mainvisual-inner-text clearfix">
                    <h1>
                        〖Let's Speak English〗
                    </h1>
                    <h2 class="sub-title">
                        kjsjflksafsd
                    </h2>
                    <div class="download-button">
                            <div class="download-android login-form">
                                <form action="<?php echo $this->_tpl_vars['HTML']; ?>
memberpage/index.php" method="post">
                                    <input type="text" name="uid" placeholder="ユーザー名またはメールアドレス"><br>
                                    <input type="password" name="password" placeholder="パスワード"><br>
                                    <input type="submit" value="login" class="login-button">
                                </form>
                            </div>
                    </div>
                </div><!-- /top-mainvisual-text -->
            </div><!-- /top-mainvisual-inner -->
        </div><!-- /top-mainvisual -->

        <div id="top-about" class="top-about">
            <div class="content-inner top-about-inner clearfix">
                <img src="">
                <div class="text-right">
                    <p>
                        フラミンゴとは、街中のカフェで外国人と語学レッスンを受けられるサービスです。スマートフォンのアプリを使って、英語や中国語などの講師を選び、カフェなどの場所や日時を予約して、直接レッスンを受けることができます。<br><br>
                        講師は全国で250名ほど集めており、10月から東京にも進出をし、サービスを拡大させています。
                    </p>
                </div>
            </div><!-- /content-inner -->
        </div><!-- /top-features -->

        <div id="course" class="top-features">
            <div class="content-inner">
                <!--<h3 class="content-title">特徴</h3>-->
                <ol class="features-list clearfix">
                    <li class="features-item">
                        <img src="">
                        <h3 class="features-title">無料会員</h3>
                        <p class="features-text">
                        ・毎日10分英会話<br>
                        ・ボタンを押してすぐに英会話スタート
                        </p>
                    </li>
                    <li class="features-item">
                        <img src="">
                        <h3 class="features-title">プレミアム会員</h3>
                        <p class="features-text">
                        ・時間無制限で話し放題<br>
                        ・プロフィールを見て相手を選択<br>
                        ・気に入った相手を友達登録<br>
                        ・友達とメッセージのやり取り
                        </p>
                    </li>
                </ol>
            </div><!-- /content-inner -->
        </div><!-- /top-features -->


        <div id="about" class="top-faq">
            <div class="content-inner-faq">
                <div class="top-faq-border">
                    <h3 class="content-title">お問い合わせ</h3>
                    <form action="<?php echo $this->_tpl_vars['HTML']; ?>
about/index.php" method="post">
                        <table name="about-form" class="about-form">
                            <tr>
                                <td>お名前</td>
                                <td></td>
                                <td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td>メールアドレス</td>
                                <td></td>
                                <td><input type="text" name="mailaddress"></td>
                            </tr>
                            <tr>
                                <td>内容</td>
                                <td></td>
                                <td><textarea cols=150 rows=10 name="about-content"></textarea></td>
                            </tr>
                        </table>
                        <input type="submit" value="送信する" class="about-button">
                    </form>
                </div><!-- /content-inner -->
            </div>
        </div><!-- /top-faq -->