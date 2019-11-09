<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Курсы - DariMurph</title>
	<?php include "include.php"; ?>	
</head>
<body>
	<?php include "HEADER.php"; ?>
	<?php include "MENU.php"; ?>

<div class="row">
	<?php include "LEFTMENU.php"; ?>
	<div class="main-block">
		<h1>Курсы</h1>
		<?php
			if (isset($_SESSION['type']) && $_SESSION['type'] == 0) {
				echo "<a href='courses_add.php'>Добавить курс</a> | <a href='course_list.php'>Записавшиеся на курсы</a>";
			}
			
			include "connect_db.php";
			
			$query = mysql_query("SELECT * FROM course ORDER BY startdate DESC");
			
			echo "<div class='blog'>";
			
			if (mysql_num_rows($query) == 0) {
				echo "<p>Курсов пока нет.</p>";
			}
			else {
				for ($i = 0; $i < mysql_num_rows($query); $i++) { 
					$result = mysql_fetch_array($query);
					
					$query_courseapp = mysql_query("SELECT * FROM courseapp WHERE course_id = '$result[id]'");
					$result_courseapp = mysql_fetch_array($query_courseapp);
					
					$free_seats = $result[free_seats] - mysql_num_rows($query_courseapp);
					
					//вывод курса
					echo "<h2><u>$result[title]</u></h2>";
					echo "<p>Дата старта: $result[startdate]</p>";
					echo "<p>Дата завершения: $result[enddate]</p>";
					echo "<p>Свободных мест: $free_seats</p>";
					echo "<p>$result[description]</p>";
					
					if (isset($_SESSION['ID']) && $free_seats > 0) {
						//кнопка для записи на курс
						echo '<form action="enrollment.php" method="post">';
						echo '<input type="submit" value="Записаться на курс">';
						echo "<input type='hidden' name='course_id' value='$result[id]'>";
						echo "<input type='hidden' name='free_seats' value='$result[free_seats]'>";
						echo '</form>';
					}
					else {
						echo "<em>Запись на курс завершена.</em>";
					}
				}
			}
				echo "</div>";
			
		?>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>