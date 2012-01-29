<html>
<head>
	<title>編集画面</title>
</head>
<body>
{include file ='memo.header.tpl'}

{if $mode == 'view'}
	{foreach from=$db_data item=v}
	<div class=edit_title>
		{$v.title}
	</div>
	<form method="POST" action="http://localhost/work/memo/controller/edit.php/regist/{$v.id}">
	<div class=form_id>
		ID:<input type='text' name='id' value='{$v.id}' readonly>
	</div>
	<div class=form_title>
		単語名:<input type="text" name="title" value="{$v.title}">
	</div>
	<div class=form_description>
		本文:<br>
		<textarea name="description" cols=40 rows=4>{$v.description}</textarea>
	</div>
	<div class=form_submit>
		<input type="submit" value="編集">
	</div>
	</form>
	{/foreach}
{/if}

{if $mode == 'edit'}
	修正を登録しました
{else if $mode == 'edit_false'}
	登録に失敗しました
{/if}

{if $mode == 'del'}
	削除しました
{else if $mode == 'del_false'}
	削除に失敗しました
{/if}

</body>
</html>
