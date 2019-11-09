<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация - DariMurph</title>
	<?php include "include.php"; ?>	
</head>
<body>
	<?php include "HEADER.php"; ?>
	<?php include "MENU.php"; ?>

<div class="row">
	<?php include "LEFTMENU.php"; ?>
	<div class="main-block">
		<h1>Регистрация</h1>
		<form action="signup_act.php" method="post">
			<label>Ваше имя:</label>
			<p><input type="text" name="name"></p>
			<label>Логин:</label>
			<p><input type="text" name="login"></p>
			<label>Пароль:</label>
			<p><input type="password" name="password"></p>
			<label>e-mail:</label>
			<p><input type="text" name="email"></p>
			<input type="submit" value="Регистрация">
		</form>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>