<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Вход в систему - DariMurph</title>
	<?php include "include.php"; ?>	
</head>
<body>
	<?php include "HEADER.php"; ?>
	<?php include "MENU.php"; ?>

<div class="row">
	<?php include "LEFTMENU.php"; ?>
	<div class="main-block">
		<h1>Вход в систему</h1>
		<form action="signin_act.php" method="post">
			<p>Логин:</p>
			<p><input type="text" name="login"></p>
			<p>Пароль:</p>
			<p><input type="password" name="password"></p>
			<input type="submit" value="Вход">
		</form>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>