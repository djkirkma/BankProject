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

<body class="is-preload">

	<?php require_once("../www/includes/header.php") ?>
	<?php require_once("../www/includes/nav.php") ?>

	<section id="main" class="wrapper">
		<div class="inner">

			<h1>Admin page</h1>
			<div id="searchbar">
					<form method="get" action="E.php">
						<input name="query-terms" id="searchBoxObj" placeholder="Search Accounts" autocomplete="off" onkeyup="handleKeyUp(event)">
					</form>
					<div id="suggestionDiv"></div>
				</div>
			<?php
			$numRows = 0;
			require_once("../application/database.php");

			?>
		</div>
	</section>


	<!-- Scripts -->
	<script src="../www/assets/js/jquery.min.js"></script>
	<script src="../www/assets/js/browser.min.js"></script>
	<script src="../www/assets/js/breakpoints.min.js"></script>
	<script src="../www/assets/js/util.js"></script>
	<script src="../www/assets/js/main.js"></script>
	
	<script src="../www/assets/js/AdminSearch.js"></script>
</body>

</html>