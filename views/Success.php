<?php
session_start();

require_once("../application/database.php");
require_once("../exceptions/DataMissingException.php");
require_once("../exceptions/DateException.php");
require_once("../exceptions/EmailException.php");
if(isset($_POST['Balance'])) {
	$AccountNumber = $_POST['AccountNumber'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Email = $_POST['Email'];
	$Balance = $_POST['Balance'];
			$sql = "UPDATE account SET FirstName = '$FirstName' ,LastName = '$LastName',Email = '$Email',Balance = '$Balance' WHERE AccountNumber = $AccountNumber";
			$result = $conn->query($sql);
}
if(isset($_POST["username"])){
	
	
	$username = $_POST['username'];	
	$password = $_POST['password'];
	try {
	if($username == "" || $password == "") {
		throw new DataMissingException();
	}
	$sql = "select password from account where firstName='$username'";
	
	$result = $conn->query($sql);
	while ($obj = $result->fetch_object()) {
		if($obj->password == $password) {
			$_SESSION["loggedin"] = $username;
			if($username == "Doug") {
				$_SESSION["admin"] = "true";
			} 
		}
	
		header("Location: index.php");
	}
}
catch (DataMissingException $e){
	$message = $e->getDetails();
	header("Location: error.php?message=$message");
}
} 
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
	<body class="is-preload">

		<?php require_once("../www/includes/header.php") ?>
		<?php require_once("../www/includes/nav.php") ?>

		<section id="main" class="wrapper">
				<div class="inner">
					
					<h2>Action Completed Successfully</h2>
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