<div class="register-area">
 <div class="touroku-form">
                <div class="touroku-title">
                    <h1>ご登録内容確認</h1>
                </div>
                <div class="touroku-area">
                        <table>
                            <tr>
                                <td>{"UserBasicInfoClass::FIRST_NAME"|constant}</td>
                                <td></td>
                                <td>{$smartyParams.firstName}</td>
                            <tr>
                                <td>{"UserBasicInfoClass::LAST_NAME"|constant}</td>
                                <td></td>
                                <td>{$smartyParams.lastName}</td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::SEX"|constant}</td>
                                <td></td>
                                <td>{$smartyParams.sexList[$smartyParams.sex]}</td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::BIRTHDAY"|constant}</td>
                                <td></td>
                                <td>{$smartyParams.birthday}</td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::MAIL_ADDRESS"|constant}</td>
                                <td></td>
                                <td>{$smartyParams.mailAddress}</td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::USER_ID"|constant}</td>
                                <td></td>
                                <td>{$smartyParams.uid}</td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::PASSWORD"|constant}</td>
                                <td></td>
                                <td>{$smartyParams.password}</td>
                            </tr>
                            <tr>
                                <td>{"UserBasicInfoClass::MEMBER_COURSE"|constant}</td>
                                <td></td>
                                <td>{$smartyParams.memberCourseList[$smartyParams.course]}</td>
                            </tr>
                            {if $smartyParams.course == 2}
                            <tr>
                                <td>{"UserBasicInfoClass::HOW_TO_PAY"|constant}</td>
                                <td></td>
                                <td>{$smartyParams.payList[$smartyParams.howToPay]}</td>
                            </tr>
                            {/if}
                        </table>
                </div>
            </div>
            <form action="{$smarty.const._FT_HTML_JPN_REGISTER_PATH}index.php" method="post">
                <input type="hidden" name="firstName"        value="{$smartyParams.firstName}">
                <input type="hidden" name="lastName"         value="{$smartyParams.lastName}">
                <input type="hidden" name="sex"              value="{$smartyParams.sex}">
                <input type="hidden" name="year"             value="{$smartyParams.year}">
                <input type="hidden" name="month"            value="{$smartyParams.month}">
                <input type="hidden" name="day"              value="{$smartyParams.day}">
                <input type="hidden" name="mailAddress"      value="{$smartyParams.mailAddress}">
                <input type="hidden" name="mailAddressAgain" value="{$smartyParams.mailAddressAgain}">
                <input type="hidden" name="uid"              value="{$smartyParams.uid}">
                <input type="hidden" name="password"         value="{$smartyParams.password}">
                <input type="hidden" name="passwordAgain"    value="{$smartyParams.passwordAgain}">
                <input type="hidden" name="course"           value="{$smartyParams.course}">
                <input type="hidden" name="howToPay"         value="{$smartyParams.howToPay}">
                <input type="hidden" name="mode"             value="">
                <input type="hidden" name="token"            value="{$smartyParams.token}">

                <input type="submit" value="訂正する" class="touroku-button" data-mode="edit">
                <input type="submit" value="登録する" class="confirm-button" data-mode="complete">
            </form>
    </div>
        <div class="footer-space"></div>
<script>
    {literal}
        $(function(){
            $('input[type="submit"]').on('click', function(){
                var mode = $(this).attr('data-mode');
                $('input[name="mode"]').val(mode);
            })
        });
    {/literal}
</script>