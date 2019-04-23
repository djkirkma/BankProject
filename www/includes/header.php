<?php
session_start();
?>
<!-- Header -->
<header id="header">
				<a class="logo" href="index.php">Cyber Bank</a>
				<nav>
				<?php
					if(isset($_SESSION["loggedin"])) {
						if($_SESSION["loggedin"] == "True")
						echo "<a href='Logout.php'>Logout</a>";
						else 
						echo "<a href='Login.php'>Login</a>";
					}
					else {
						echo "<a href='Login.php'>Login</a>";
					}
					?>
					<a href="#menu">Menu</a>
					
                </nav>
                
            </header>
            