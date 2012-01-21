<html>
	<head>
		<title>編集画面</title>
		<style type="text/css">
			<!--
				body{
					margin:0 auto ; 
					width:auto;
				}
				div.main{
					width: 100%;
				}
				div.main-menu{
					width: 100%;
					height: 5%;
					background-color: #ff0000;
				}
				div.main-content{
					width: 100%;
				}
		</style>
	</head>
		<body>
			<div class="main">
				<div class="main-menu">めにゅう</div>
				<div class="main-content">
					<form method="POST" action="">
						<div>
							単語の名前： <input type="text" name="title">
						</div>
						<div>
							内容：<br />
							<textarea name="description" cols="60" rows= "10"></textarea>
						</div>
						<div>
							<input type="submit" value="投稿"/>
						</div>
					</form>
				</div>
			</div>
		</body>
</html>