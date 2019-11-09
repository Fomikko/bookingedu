<?php
	session_start();
	if (isset($_GET["exit"])) {
		session_destroy();
		echo '<script>location.replace("index.php");</script>';
	}
?>