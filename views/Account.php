<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php

require_once("../application/database.php");
$sql = "SELECT * FROM `account` WHERE accountnumber = 1";
$result = $conn->query($sql);
while ($obj = $result->fetch_object()) {
	$FirstName = $obj->FirstName;
	$LastName = $obj->LastName;
	$Email = $obj->Email;
	$Balance = $obj->Balance;

}
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
								<header>
									<h2>Account Information</h2>
								</header>
								<form action="ModifyAccount.php">
								<p>First Name: <?php  echo $FirstName?></p>
								<p>Last Name: <?php  echo $LastName?></p>
								<p>Email: <?php echo $Email ?> </p>
								<p>Balance:  $<?php echo $Balance ?></p>
								<button type="submit"> Edit </button>
								</form>
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