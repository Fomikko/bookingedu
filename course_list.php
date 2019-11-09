<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Записавшиеся на курсы - DariMurph</title>
	<?php include "include.php"; ?>	
</head>
<body>
	<?php include "HEADER.php"; ?>
	<?php include "MENU.php"; ?>

<div class="row">
	<?php include "LEFTMENU.php"; ?>
	<div class="main-block">
		<h1>Записавшиеся на курсы</h1>
		<?php
			
			include "connect_db.php";
			
			$query_course = mysql_query("SELECT * FROM course ORDER BY startdate DESC");

			for ($i = 0; $i < mysql_num_rows($query_course); $i++) { 
				$result_course = mysql_fetch_array($query_course);
				
				echo "<h2><u>$result_course[title]</u></h2>";
				$course_id = $result_course[id];
				
				$query_courseapp = mysql_query("SELECT * FROM courseapp WHERE course_id = '$course_id'");
				for ($j = 0; $j < mysql_num_rows($query_courseapp); $j++) {
					$result_courseapp = mysql_fetch_array($query_courseapp);
					$acc_id = $result_courseapp[acc_id];
				
					// вывод записавшихся
					$query_acc = mysql_query("SELECT * FROM account WHERE id = '$acc_id'");
					$result_acc = mysql_fetch_array($query_acc);
					echo "<p><u>$result_acc[login]</u> ($result_acc[name]) - $result_acc[email]</p>";
				}
			}
			
		?>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>