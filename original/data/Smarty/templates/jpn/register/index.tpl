<div class="register-area">
<form action="{$smarty.const._FT_HTML_JPN_REGISTER_PATH}index.php" method="post">
    <input type="hidden" name="token" value="{$smartyParams.token}">
    <input type="hidden" name="mode" value="confirm">
            <div class="touroku-form">
                <div class="touroku-title">
                    <h1>新規会員登録フォーム</h1>
                </div>
                <div class="touroku-area">
                        <table>
                            <tr>
                                <td>{"UserBasicInfoClass::FIRST_NAME"|constant}</td>
                                <td></td>
                                <td><input type="text" name="firstName" placeholder="Taro" value="{$smartyParams.firstName}"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::LAST_NAME"|constant}</td>
                                <td></td>
                                <td><input type="text" name="lastName" placeholder="Yamada" value="{$smartyParams.lastName}"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::SEX"|constant}</td>
                                <td></td>
                                <td><select name="sex">
                                        {foreach from=$smartyParams.sexList item="value" key="key"}
                                            <option value="{$key}" {if $key == $smartyParams.sex}selected{/if}>{$value}</option>
                                        {/foreach}
                                </select></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::BIRTHDAY"|constant}</td>
                                <td></td>
                                <td>
                                    <select name="year">
                                        {foreach from=$smartyParams.yearList item="value"}
                                            <option value="{$value}" {if $value == $smartyParams.year}selected{/if}>{$value}</option>
                                        {/foreach}
                                    </select>年
                                    <select name="month">
                                        {foreach from=$smartyParams.monthList item="value"}
                                            <option value="{$value}" {if $value == $smartyParams.month}selected{/if}>{$value}</option>
                                        {/foreach}
                                    </select>月
                                    <select name="day">
                                        {foreach from=$smartyParams.dayList item="value"}
                                            <option value="{$value}" {if $value == $smartyParams.day}selected{/if}>{$value}</option>
                                        {/foreach}
                                    </select>日
                                </td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::MAIL_ADDRESS"|constant}</td>
                                <td></td>
                                <td><input type="text" name="mailAddress" placeholder="abc@sample.com" value="{$smartyParams.mailAddress}"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::MAIL_ADDRESS_AGAIN"|constant}</td>
                                <td></td>
                                <td><input type="text" name="mailAddressAgain" placeholder="abc@sample.com" value="{$smartyParams.mailAddressAgain}"></td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::USER_ID"|constant}</td>
                                <td></td>
                                <td><input type="text" name="uid" value="{$smartyParams.uid}"></td>
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
                                    {foreach from=$smartyParams.memberCourseList item="value" key="key"}
                                        <input type="radio" name="course" value="{$key}" {if $key == $smartyParams.course}checked{/if}>{$value}
                                    {/foreach}
                                </td>
                            </tr>
                            <tr {if $smartyParams.course != 2}style="display:none;"{/if} class="premiumSelected">
                                <td>{"UserBasicInfoClass::HOW_TO_PAY"|constant}</td>
                                <td></td>
                                <td>
                                    {foreach from=$smartyParams.payList item="value" key="key"}
                                        <input type="radio" name="howToPay" value="{$key}" {if $key == $smartyParams.howToPay}checked{/if}>{$value}
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
{literal}
    <script>

        $(function(){
            $('input[name="course"]').on('change', function(){
                var is_premium = $('input[name="course"][value="2"]').is(':checked');
                var howToPay = $('tr.premiumSelected');
                if(is_premium){
                    howToPay.show();
                }else{
                    howToPay.find('input[name="howToPay"]').prop('checked', false);
                    howToPay.hide();
                }
            });
        });

    </script>
{/literal}
