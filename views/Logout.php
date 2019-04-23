<?php

$_SESSION["loggedin"] = false;
$_SESSION["admin"] = false;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Deposit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="../www/assets/css/main.css" />
	</head>
	<body>

		<?php require_once("../www/includes/header.php"); ?>
		<?php require_once("../www/includes/nav.php"); ?>
		<?php

$_SESSION["loggedin"] = false;
$_SESSION["admin"] = false;
header("Location: index.php")
?>
		<section id="main" class="wrapper">
				<div class="inner">
					
					<h2>Account Logged Out</h2>
				</div>
			</section>


		<!-- Scripts -->
					<script src="../www/assets/js/jquery.min.js"></script>
			<script src="../www/assets/js/browser.min.js"></script>
			<script src="../www/assets/js/breakpoints.min.js"></script>
			<script src="../www/assets/js/util.js"></script>
			<script src="../www/assets/js/main.js"></script>
	</body>
</html>