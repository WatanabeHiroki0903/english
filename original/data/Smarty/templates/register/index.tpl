<div class="register-area">
<form action="{$HTML}register/confirm.php" method="post">
            <div class="touroku-form">
                <div class="touroku-title">
                    <h1>新規会員登録フォーム</h1>
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
        </div>
        <div class="footer-space"></div>
