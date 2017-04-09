<div class="register-area">
<form action="{$_FT_HTML_JPN_REGISTER_PATH}confirm.php" method="post">
            <div class="touroku-form">
                <div class="touroku-title">
                    <h1>新規会員登録フォーム</h1>
                </div>
                <div class="touroku-area">
                        <table>
                            <tr>
                                <td>名</td>
                                <td></td>
                                <td><input type="text" name="firstName" placeholder="Taro"></td>
                            </tr>
                            <tr>
                                <td>姓</td>
                                <td></td>
                                <td><input type="text" name="lastName" placeholder="Yamada"></td>
                            </tr>
                            <tr>
                                <td>性別</td>
                                <td></td>
                                <td><select name="sex">
                                        {foreach from=$sexList item="value" key="key"}
                                            <option value="{$key}">{$value}</option>
                                        {/foreach}
                                </select></td>
                            </tr>
                            <tr>
                                <td>生年月日</td>
                                <td></td>
                                <td>
                                    <select name="year">
                                        {foreach from=$yearList item="value"}
                                            <option value="{$value}">{$value}</option>
                                        {/foreach}
                                    </select>年
                                    <select name="month">
                                        {foreach from=$monthList item="value"}
                                            <option value="{$value}">{$value}</option>
                                        {/foreach}
                                    </select>月
                                    <select name="day">
                                        {foreach from=$dayList item="value"}
                                            <option value="{$value}">{$value}</option>
                                        {/foreach}
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
                                <td>
                                    {foreach from=$memberCourseList item="value" key="key"}
                                        <input type="radio" name="course" value="{$key}">{$value}
                                    {/foreach}
                                </td>
                            </tr>
                            <tr>
                                <td>支払い方法</td>
                                <td></td>
                                <td>
                                    {foreach from=$payList item="value" key="key"}
                                        <input type="radio" name="howtopay" value="{$key}">{$value}
                                    {/foreach}
                                </td>
                            </tr>
                        </table>
                </div>
            </div>
            <input class="touroku-button" type="submit" value="登録する">
        </form>
        </div>
        <div class="footer-space"></div>
