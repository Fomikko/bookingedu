<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Комментарии - DariMurph</title>
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
		<h1>Страница комментариев</h1>
		<form name="comment" action="comments_act.php" method="post">
			<p>
				<?php
					include "connect_db.php";
					//получение новости
					$entry = $_REQUEST["id"];
					$query_blog = mysql_query("SELECT * FROM blog WHERE id = '$entry'");
					$result = mysql_fetch_array($query_blog);

					//вывод новости
					echo "<div class='blog'>";
					echo "<h2><u>$result[title]</u></h2>";
					echo "<p>$result[date]</p>";
					echo "<p>$result[text]</p>";
					echo "</div>";

					echo "<h2>Комментарии</h2>";
					//получение комментов
					$query_comms = mysql_query("SELECT * FROM comment WHERE entry = '$entry'");

					if (mysql_num_rows($query_comms) == 0) {
						echo "<p>Комментариев пока нет.</p>";
					}
					else {
						//вывод комментов
						for ($i = 0; $i < mysql_num_rows($query_comms); $i++) {
							$result = mysql_fetch_array($query_comms);

							echo "<h4><u>$result[login]</u></h4>";
							echo "<p>$result[date]</p>";
							echo "<p>$result[comment]</p>";
						}
					}

					//отправка комментария
					if (isset($_SESSION['login'])) {
						echo "<form action='comments_act.php' method='post'";
						$login = $_SESSION['login'];

						echo "<label>Комментарий:</label>";
						echo "<p><input type='hidden' name='login' value='$login' /></p>";
						echo "<p><textarea name='comment' cols='70' rows='10'></textarea></p>";
						echo "<input type='hidden' name='entry' value='$entry' />";
						echo "<p><input type='submit' value='Отправить' /></p>";
						echo "</form>";
					}
				?>
		</form>
	</div>
</div>

	<?php include "FOOTER.php"; ?>

</body>
</html>