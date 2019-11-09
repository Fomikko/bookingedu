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
		<?php
			include "connect_db.php";
			
			$title = $_REQUEST['title'];
			$text = $_REQUEST['text'];
			$date = date('Y-m-d H:i:s');

			$query = mysql_query("INSERT INTO blog (id, title, date, text) VALUES ('0', '$title', '$date', '$text')");

			mysql_close($connection);
			echo "<script>location.replace('index.php');</script>";
		?>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>