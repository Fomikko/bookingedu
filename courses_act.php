<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Добавление курса - DariMurph</title>
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
		<h1>Добавление курса</h1>
		<?php
			include "connect_db.php";
			
			$title = $_REQUEST['title'];
			$startdate = $_REQUEST['startdate'];
			$enddate = $_REQUEST['enddate'];
			$description = $_REQUEST['description'];
			$free_seats = $_REQUEST['free_seats'];

			$query = mysql_query("INSERT INTO course (id, startdate, enddate, title, description, free_seats) VALUES ('0', '$startdate', '$enddate', '$title', '$description', '$free_seats')");

			mysql_close($connection);
			echo "<script>location.replace('courses.php');</script>";
		?>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>