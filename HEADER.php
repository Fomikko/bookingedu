<header>
	<div class="row">
		<div class="logo">
			<a href="/">DariMurph</a>
			<h1>ЗООПСИХОЛОГ И ПУШИСТЫЙ КОРГИ</h1>
		</div>
		<div class="login-logout">
			<?php
				if (!isset($_SESSION['login'])) {
					echo "<a href='signin.php'>Вход</a> | <a href='signup.php'>Регистрация</a>";
				}
				else{
					echo "Здравствуйте, ".$_SESSION["login"]; 
					echo "<a href='?exit'> [Выход]</a>";
				}
			?>
		</div>
	</div>
</header>