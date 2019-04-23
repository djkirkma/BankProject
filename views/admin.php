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

		<section id="main" class="wrapper">
				<div class="inner">
					
                    <h1>Admin page</h1>
                    <?php
                    $numRows = 0;
                    require_once("../application/database.php");
                    $sql = "SELECT * FROM account";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo $row['AccountNumber']."<br>";
                        echo $row['FirstName']."<br>";
                        echo $row['LastName']."<br>";
                        echo $row['Email']."<br>";
                        echo $row['Balance']."<br>";
                    }
                    
                    ?>
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