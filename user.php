<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="user2.css">

		</head>

	
	<body> 
	
	<?php
    session_start();
	?>
	
	<div id = "menu">
		<ul>
	        <li><a href="user.php">Acasa</a></li>
	  		<li><a href="noutati.php">Noutati</a></li>	
		    <li><a href="contact.php">Contact</a></li>
		    <li><a href="despre.php">Despre noi</a></li>
		    <li><a href="logout.php">Logout</a></li>
		    <li id = "account" style = "float:right">
		    	<a>
			    	<?php 
						if(isset($_SESSION['nume']))
							echo "Logat ca:  " . $_SESSION['nume'];
						else
							header("Location: register.php");
					?>
				</a>
			</li>
		</ul>
	</div>
		

	<a id="header" href="Tabel.php">Vizualizare terenuri existente</a>
	<a id="header2" href="Adaugare.php">Adaugare terenuri noi   </a>
	<p id="copyright">&copy; 2018 AgLr.com<p>

	



</body>



</html>






