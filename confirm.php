<?php
$name = isset($_POST["name"])? $_POST["name"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$inquiry_detail = isset($_POST["inquiry_detail"])? $_POST["inquiry_detail"] : "";
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>【MUSIC WASH】お問い合わせフォーム</title>
</head>

<body>
	<header></header>
	<mein>
		<article>
			<h2><span>C</span>ONTACT</h2>
			<form action="complete.php" method="post" id="contact">
			<!-- input:hiddenの内容 -->
				<input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?>">
				<input type="hidden" name="inquiry_detail" value="<?php echo htmlspecialchars($inquiry_detail,ENT_QUOTES,"UTF-8"); ?>">
				<dl>
					<dt>お名前</dt>
					<dd><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?></dd>
					<dt>メールアドレス</dt>
					<dd><?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?></dd>
					<dt>お問い合わせ内容</dt>
					<dd><?php echo htmlspecialchars($inquiry_detail,ENT_QUOTES,"UTF-8"); ?></dd>
				</dl>
			</form>
		</article>	
	</mein>
	<footer></footer>
</body>
</html>