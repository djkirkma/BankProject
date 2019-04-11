<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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
								<form action = "../controllers/ModifyAccount.php" method="post">
								<p >First Name:</p> <input  type="text" name = "FirstName">
								<p>Last Name:</p><input  type="text" name = "LastName">
								<p >Email:</p><input type="text" name = "Email">
								
							</div>
							<button name = "ModifyButton" type="submit"> Submit
								</form>
						</div>
					</section>

		


	</body>
</html>