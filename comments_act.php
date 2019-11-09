<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Добавление комментария - DariMurph</title>
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
		<h1>Добавление комментария</h1>
		<?php
			include "connect_db.php";
			
			$entry = $_REQUEST['entry'];
			$login = $_REQUEST['login'];
			$comment = $_REQUEST['comment'];
			$date = date('Y-m-d H:i:s');

			$query = mysql_query("INSERT INTO comment (id, date, entry, login, comment) VALUES ('0', '$date', '$entry', '$login', '$comment')");

			mysql_close($connection);
			
			echo "<form action = 'comments.php' method='post'>";
			echo "<input type='hidden' name='id' value='$entry' />";
			echo "<input type='submit' value='Вернуться к комментариям'>";
			echo "</form>";
		?>
		
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>