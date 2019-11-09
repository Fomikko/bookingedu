<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Отзывы - DariMurph</title>
	<?php include "include.php"; ?>	
</head>
<body>
	<?php include "HEADER.php"; ?>
	<?php include "MENU.php"; ?>

<div class="row">
	<?php include "LEFTMENU.php"; ?>
	<div class="main-block">
		<h1>Отзывы</h1>
		
		<?php
			include "connect_db.php";
			//получение отзывов
			$query = mysql_query("SELECT * FROM guestbook");

			
			if (mysql_num_rows($query) == 0) {
				echo "<p>Отзывов пока нет.</p>";
			}
			else {
				//вывод отзывов
				for ($i = 0; $i < mysql_num_rows($query); $i++) {
					$result = mysql_fetch_array($query);

					echo "<h4><u>$result[login]</u></h4>";
					echo "<p>$result[date]</p>";
					echo "<p>$result[feedback]</p>";
				}
			}

			//отправка отзыва
			if (isset($_SESSION['login'])) {
				echo "<form action='guestbook_act.php' method='post'";
				$login = $_SESSION['login'];

				echo "<label>Ваш отзыв:</label>";
				echo "<p><input type='hidden' name='login' value='$login' /></p>";
				echo "<p><textarea name='feedback' cols='70' rows='10'></textarea></p>";
				echo "<p><input type='submit' value='Отправить' /></p>";
				echo "</form>";
			}
		?>
		
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>