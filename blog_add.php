<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Добавление записи в блог - DariMurph</title>
	<?php include "include.php"; ?>	
</head>
<body>
	<?php
		include "HEADER.php";
		include "MENU.php";
	?>

<div class="row">
	<?php include "LEFTMENU.php"; ?>
	<div class="main-block">
		<h1>Добавление записи в блог</h1>
		<form action="blog_act.php" method="post">
			<p>Заголовок:</p>
			<p><input type="text" name="title"></p>
			<p>Запись:</p>
			<textarea name="text" cols="70" rows="60"></textarea>
			<input type="submit" value="Добавить">
		</form>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>