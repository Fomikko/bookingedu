<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Добавление записи в книгу отзывов - DariMurph</title>
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
		<h1>Добавление записи в книгу отзывов</h1>
		<?php
			include "connect_db.php";
			
			$login = $_REQUEST['login'];
			$feedback = $_REQUEST['feedback'];
			$date = date('Y-m-d H:i:s');

			$query = mysql_query("INSERT INTO guestbook (id, login, feedback, date) VALUES ('0', '$login', '$feedback', '$date')");

			mysql_close($connection);
			echo "<script>location.replace('guestbook.php');</script>";
		?>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>