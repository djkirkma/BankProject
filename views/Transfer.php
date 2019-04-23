<?php
require_once("../exceptions/LoginException.php");
require_once("../application/database.php");
try{
	if (session_id() == "")
  	session_start();
	$name = $_SESSION["loggedin"];
	if(!isset($name)) {
		throw new LoginException();
	}
}
catch (LoginException $e) {
	$message = $e->getDetails();
	header("Location: ../views/error.php?message=$message");
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Transfer</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="../www/assets/css/main.css" />
</head>

<body class="is-preload">

	<?php require_once("../www/includes/header.php") ?>
	<?php require_once("../www/includes/nav.php") ?>


	<form method="post" action="Success.php">
		
			<!-- Break -->
			<div class="col-12">
				<h2> Account reciving payment </h2>
			</div>
		</div>


		<!-- Second half -->
		<div class="row gtr-uniform">
			<div class="col-6 col-12-xsmall">
				<input type="text" name="AccountNumber" id="AccountNumber" value="" placeholder="AccountNumber" />
			</div>
			<div class="col-6 col-12-xsmall">
				<input type="text" name="DepositAmount" id="DepositAmount" value="" placeholder="Deposit Amount" />
			</div>
			<div class="col-12">
				<textarea name="textarea" id="textarea" placeholder="Notes about transfer" rows="3"></textarea>
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