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
		
		<?php
			session_start();
			include "connect_db.php";

			$login = $_REQUEST["login"];
			$password = $_REQUEST["password"];

			$result = mysql_query("SELECT * FROM account WHERE login='$login'") or die("Ошибка при выполнении запроса:".mysql_error());
			$result_array = mysql_fetch_array($result);
			
			if (!empty($result_array["login"]) && !empty($result_array["password"]) && $login == $result_array["login"] && $password == $result_array["password"]) {
				$_SESSION["ID"] = $result_array["ID"];
				$_SESSION["type"] = $result_array["type"];
				$_SESSION["login"] = $result_array["login"];
				$_SESSION["password"] = $result_array["password"];
				$_SESSION["email"] = $result_array["email"];
				$_SESSION["name"] = $result_array["name"];

				mysql_close($connection);
			}
			else {
				echo "<script type='text/javascript'>alert('Не введен (не правильно введен) логин и/или пароль!');</script>";
			}
			echo '<script>location.replace("index.php");</script>';
		?>
		
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>