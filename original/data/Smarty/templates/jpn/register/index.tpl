<div class="register-area">
<form action="{$smarty.const._FT_HTML_JPN_REGISTER_PATH}confirm.php" method="post">
            <div class="touroku-form">
                <div class="touroku-title">
                    <h1>新規会員登録フォーム</h1>
                </div>
                <div class="touroku-area">
                        <table>
                            <tr>
                                <td>{"UserBasicInfoClass::FIRST_NAME"|constant}</td>
                                <td></td>
                                <td><input type="text" name="firstName" placeholder="Taro"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::LAST_NAME"|constant}</td>
                                <td></td>
                                <td><input type="text" name="lastName" placeholder="Yamada"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::SEX"|constant}</td>
                                <td></td>
                                <td><select name="sex">
                                        {foreach from=$sexList item="value" key="key"}
                                            <option value="{$key}">{$value}</option>
                                        {/foreach}
                                </select></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::BIRTHDAY"|constant}</td>
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
                                <td>{"UserBasicInfoClass::MAIL_ADDRESS"|constant}</td>
                                <td></td>
                                <td><input type="text" name="mailAddress" placeholder="sample@sample.com"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::MAIL_ADDRESS_AGAIN"|constant}</td>
                                <td></td>
                                <td><input type="text" name="mailAddressAgain" placeholder="sample@sample.com"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::USER_ID"|constant}</td>
                                <td></td>
                                <td><input type="text" name="uid"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::PASSWORD"|constant}</td>
                                <td></td>
                                <td><input type="password" name="password"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::PASSWORD_AGAIN"|constant}</td>
                                <td></td>
                                <td><input type="password" name="passwordAgain"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::MEMBER_COURSE"|constant}</td>
                                <td></td>
                                <td>
                                    {foreach from=$memberCourseList item="value" key="key"}
                                        <input type="radio" name="course" value="{$key}">{$value}
                                    {/foreach}
                                </td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::HOW_TO_PAY"|constant}</td>
                                <td></td>
                                <td>
                                    {foreach from=$payList item="value" key="key"}
                                        <input type="radio" name="howToPay" value="{$key}">{$value}
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
