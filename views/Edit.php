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

			<h1>Edit page</h1>
			<?php
			require_once("../application/database.php");
			$sql = "SELECT * FROM account WHERE AccountNumber = $ID";
			$result = $conn->query($sql);
			echo "<table> <tr>
					<td> Account Number</td>
					<td> First Name</td>
					<td> Last Name</td>
					<td> Email</td>
					<td> Balance</td>
					<td> </td>
					</tr>";
			while ($row = $result->fetch_assoc()) {
				echo "<tr> <form action='Success.php' method='post'>";
				echo "<input type = 'hidden' name ='AccountNumber' value=" . $row['AccountNumber'] . " >";
				echo "<td>" . $row['AccountNumber'] . "</td>";
				echo "<td> <input name ='FirstName' value=" . $row['FirstName'] . "></td>";
				echo "<td> <input name ='LastName' value=" . $row['LastName'] . "></td>";
				echo "<td> <input name ='Email' value=" . $row['Email'] . "></td>";
				echo "<td> <input name ='Balance' value=" . $row['Balance'] . "></td>";
				echo "<td> <button type='submit'> Submit </button> </form> </td>";
				echo " </tr>";
			}
			echo "</table>";

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