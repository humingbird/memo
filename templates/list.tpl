<html>
<head>
	<title>一覧表示</title>
</head>
<body>
<!-- メニュー部分 -->
{include file='memo.header.tpl'}
<!-- ここまで-->
<!-- 一覧表示 -->
<h4>単語一覧</h4>
<!-- 指定件数まで単語と説明を表示する -->
{foreach from=$word_list key=k item=v}
	<div class=list{$k}>
		<h4>{$v.title}</h4>
		<hr>
		{$v.description}<br>
	</div>
	<div class=edit>
		<a href ="{$home}controller/edit.php/edit/{$v.id}">編集</a>
	</div>
	<div class=delete>
		<a href="{$home}controller/edit.php/del/{$v.id}">削除</a>
	</div>	
{/foreach}
</body>
</html>
