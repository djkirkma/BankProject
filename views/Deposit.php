<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Deposit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="../www/assets/css/main.css" />
	</head>
	<body class="is-preload">

		<?php require_once("../www/includes/header.php") ?>
		<?php require_once("../www/includes/nav.php") ?>

		<h3>Deposit</h3>
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="AccountNumber" id="AccountNumber" value="" placeholder="AccountNumber" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="DepositAmount" id="DepositAmount" value="" placeholder="Deposit Amount" />
											</div>
											<!-- Break -->
											<div class="col-12">
												<select name="category" id="category">
													<option value="">- Select -</option>
													<option value="alpha">Savings</option>
													<option value="beta">Checking</option>
												</select>
											</div>
											<div class="col-12">
												<textarea name="textarea" id="textarea" placeholder="Deposit Information" rows="3"></textarea>
											</div>
											<!-- Break -->
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Submit" class="primary" /></li>
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