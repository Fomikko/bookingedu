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
		<form action="courses_act.php" method="post">
			<p>Название:</p>
			<p><input type="text" name="title"></p>
			<p>Количество мест:</p>
			<p><input type="text" name="free_seats"></p>
			<p>Дата старта:</p>
			<p><input type="date" name="startdate"></p>
			<p>Дата завершения:</p>
			<p><input type="date" name="enddate"></p>
			<p>Описание:</p>
			<textarea name="description" cols="70" rows="20"></textarea>
			<p><input type="submit" value="Добавить"></p>
		</form>
	</div>
</div>
	
	<?php include "FOOTER.php"; ?>

</body>
</html>