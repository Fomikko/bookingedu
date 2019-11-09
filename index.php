<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>DariMurph - позитивная кинология</title>
	<?php include "include.php"; ?>	
</head>
<body>
	<?php include "HEADER.php"; ?>
	<?php include "MENU.php"; ?>

<div class="row">
	<?php include "LEFTMENU.php"; ?>
	<div class="main-block">
		<h1>Блог</h1>
		<?php
			if (isset($_SESSION['type']) && $_SESSION['type'] == 0) {
				echo "<a href='blog_add.php'>Добавить запись</a>";
			}
			
			include "connect_db.php";
			
			$query = mysql_query("SELECT * FROM blog ORDER BY date DESC");
			
			echo "<div class='blog'>";
			for ($i = 0; $i < mysql_num_rows($query); $i++) { 
				$result = mysql_fetch_array($query);
				
				//вывод новости
				echo "<h2><u>$result[title]</u></h2>";
				echo "<p>$result[date]</p>";
				echo "<p>$result[text]</p>";
				
				//кнопка для просмотра комментов
				echo '<form action="comments.php" method="post">';
				echo '<input type="submit" value="Комментарии">';
				echo "<input type='hidden' name='id' value='$result[ID]'>";
				echo '</form>';
			}
			echo "</div>";
			
		?>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>