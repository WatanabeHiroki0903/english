<div class="about-index">
	<div class="about-index-area">
		<div class="about-index-title">
			<p>ご登録情報を入力して、ご入力いただいたメールアドレスに届いたメールからパスワードを変更してください。</p>
		</div>
		<div class="forgotten-content">
			<form action="{$_FT_HTML_JPN_FORGOTTEN_PATH}complete.php" method="post">
				<table>
                    <tr>
                        <td>名</td>
                        <td><input type="text" name="firstname" placeholder="Taro"></td>
                    </tr>
                    <tr>
                        <td>姓</td>
                        <td><input type="text" name="lastname" placeholder="Yamada"></td>
                    </tr>
                    <tr>
                        <td>性別</td>
                        <td><select name="sex">
                            <option value="man">男性</option>
                            <option value="woman">女性</option>
                            <option value="other">その他</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>生年月日</td>
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
                        <td><input type="text" name="mailaddress"></td>
                    </tr>
				</table>
				<input type="submit" value="確定">
			</form>
		</div>
	</div>
</div>