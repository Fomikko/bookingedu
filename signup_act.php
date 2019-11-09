<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация - DariMurph</title>
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
		<h1>Регистрация</h1>
		<?php
			include "connect_db.php";
			$login = $_REQUEST["login"];
			$password = $_REQUEST["password"];
			$email = $_REQUEST["email"];
			$name = $_REQUEST["name"];
			
			$res_login = mysql_query("SELECT login FROM account WHERE login='$login'");
			$res_login = mysql_fetch_array($res_login);

			$res_email = mysql_query("SELECT email FROM account WHERE email='$email'");
			$res_email = mysql_fetch_array($res_email);

			if (empty($res_login["login"]) && empty($res_email["email"])) {
				$query = "INSERT INTO account (id, type, name, login, password, email) VALUES ('0', '1', '$name', '$login', '$password', '$email')";
				$result = mysql_query($query) or die("Ошибка при выполнении запроса:".mysql_error());
			}
			else{
				echo "<meta charset='utf-8'>";
				echo "<script type='text/javascript'>alert('Такой логин и/или почта существует!');</script>";
			}
			mysql_close($connection);
		?>
		<p>Регистрация прошла успешно. Вы будете перенаправлены на главную страницу.</p>
		<script>location.replace('index.php');</script>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>