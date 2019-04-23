<!-- Nav -->
<nav id="menu">
	<?php
	session_start();
	 ?>
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="Account.php">My Account</a></li>
                    <li><a href="Deposit.php">Deposit</a></li>
                    <li><a href="Transfer.php">Transfer</a></li>
					<?php 
					if($_SESSION["admin"] == "true") {
						echo " <li><a href='admin.php'>Admin page</a></li>";
					}
					?>
				</ul>
			</nav>