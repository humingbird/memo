<html>
<head>
<title>編集画面</title>
</head>
<body>
<!-- メニュー部分 -->
{include file='memo.header.tpl'}
<!-- ここまで -->
<!-- 編集画面 -->
<form method="POST" action="entry.php">
	<div class="form_name">単語名:
		<input type="text" name="word_name">
	</div>
	<div class=form_description">説明:<br>
		<textarea  cols="40" rows="6" wrap="off" name="word_description"></textarea>
	</div>
	<div class="form_submit">
		<input type="submit" value="登録">
	</div>
</form>
</body>
</html>
