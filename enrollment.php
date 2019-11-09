<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Запись на курс - DariMurph</title>
	<?php include "include.php"; ?>	
</head>
<body>
	<?php include "HEADER.php"; ?>
	<?php include "MENU.php"; ?>

<div class="row">
	<?php include "LEFTMENU.php"; ?>
	<div class="main-block">
		<h1>Запись на курс</h1>
		<?php
			include "connect_db.php";
			$acc_id = $_SESSION['ID'];
			$course_id = $_REQUEST['course_id'];
			
			$query = mysql_query("SELECT * FROM courseapp WHERE course_id='$course_id'");
			$flag = false;
			
			for ($i = 0; $i < mysql_num_rows($query); $i++) {
				$result = mysql_fetch_array($query);
				if ($result[acc_id] == $acc_id) {
					$flag = true;
					break;
				}
			}
			if ($flag == 0) {
				$query = mysql_query("INSERT INTO courseapp (id, acc_id, course_id) VALUES ('0', '$acc_id', '$course_id')");
			}
			else {
				echo "<script type='text/javascript'>alert('Вы уже записаны на этот курс.');</script>";
			}
			mysql_close($connection);
			echo "<script>location.replace('courses.php');</script>";
		?>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>