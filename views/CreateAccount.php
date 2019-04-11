<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Create Account</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="../www/assets/css/main.css" />
	</head>
	<body class="is-preload">

		<?php require_once("../www/includes/header.php") ?>
		<?php require_once("../www/includes/nav.php") ?>

		<h3>Account Information</h3>
									<form method="post" id="theForm" action="../controllers/newEntry.php">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="FirstName" id="firstName" value="" placeholder="First Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="LastName" id="lastName" value="" placeholder="Last Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="email" name="Email" id="Email" value="" placeholder="Email" />
											</div>
											<!-- Break -->
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name = "createAccountSubmit" value="Submit" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>

									<script src="../www/assets/js/jquery.min.js"></script>
			<script src="../www/assets/js/browser.min.js"></script>
			<script src="../www/assets/js/breakpoints.min.js"></script>
			<script src="../www/assets/js/util.js"></script>
			<script src="../www/assets/js/main.js"></script>
	</body>
</html>