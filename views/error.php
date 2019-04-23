<!DOCTYPE HTML>
<?php
$message = "Error message not found";
$message = $_GET["message"];
?>
<html>
	<head>
		<title>Account Info</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="../www/assets/css/main.css" />
	</head>
	<body class="is-preload">

		<?php require_once("../www/includes/header.php") ?>
		<?php require_once("../www/includes/nav.php") ?>
		<!-- Main -->
		<section id="main" class="wrapper">
						<div class="inner">
							<div class="content">
								<?php echo "<h2> $message </h2>" ?>
							</div>
						</div>
					</section>

					<script src="../www/assets/js/jquery.min.js"></script>
			<script src="../www/assets/js/browser.min.js"></script>
			<script src="../www/assets/js/breakpoints.min.js"></script>
			<script src="../www/assets/js/util.js"></script>
			<script src="../www/assets/js/main.js"></script>

	</body>
</html>