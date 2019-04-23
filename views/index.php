<!DOCTYPE HTML>
<html>

<head>
	<title>Cyber Bank Home</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="../www/assets/css/main.css" />

</head>

<body class="is-preload">

	<?php
	require_once("../www/includes/header.php"); ?>

	<?php require_once("../www/includes/nav.php") ?>

	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<h1>Cyber Bank</h1>
			<p>A modern online banking system<br />
				designed by Doug Kirkman, Jay Conway, Hannah Curtis</p>
		</div>
		<video autoplay loop muted playsinline src="images/banner.mp4"></video>
	</section>

	<!-- Highlights -->
	<section class="wrapper">
		<div class="inner">
			<header class="special">
				<h2>Get Started</h2>


				<div id="searchbar">
					<form method="get" action="search.php">
						<input name="query-terms" id="searchBoxObj" placeholder="Search features" autocomplete="off" onkeyup="handleKeyUp(event)">
						<input type="submit" value="Go">
					</form>


					<div id="suggestionDiv"></div>



				</div>
			</header>
			<div class="highlights">
				<section>
					<div class="content">
						<header>
							<a href="CreateAccount.php" class="icon fa-vcard-o"><span class="label">Icon</span></a>
							<h3>Create Your Account</h3>
						</header>
						<p>If you are new, please set up a new account.</p>
					</div>
				</section>
				<section>
					<div class="content">
						<header>
							<a href="Deposit.php" class="icon fa-line-chart"><span class="label">Icon</span></a>
							<h3>Deposits</h3>
						</header>
						<p>Deposit money into your account.</p>
					</div>
				</section>
				<section>
					<div class="content">
						<header>
							<a href="Transfer.php" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
							<h3>Transfer Funds</h3>
						</header>
						<p>Have funds you want transfered? Start here.</p>
					</div>
				</section>
			</div>
		</div>
	</section>

	<!-- Scripts -->
	<script src="../www/assets/js/jquery.min.js"></script>
	<script src="../www/assets/js/browser.min.js"></script>
	<script src="../www/assets/js/breakpoints.min.js"></script>
	<script src="../www/assets/js/util.js"></script>
	<script src="../www/assets/js/main.js"></script>
	<script src="../www/assets/js/search.js"></script>
</body>

</html>