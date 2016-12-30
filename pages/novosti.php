<?php
	date_default_timezone_set("Europe/Sarajevo");
			session_start();
			if(isset($_POST['logout'])){
				unset($_SESSION['login']);
				session_destroy();
				echo '<script>alert("Niste vise logovani!");</script>';
			}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Naslovna - Massage Center</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/logo.css">
	<link rel="stylesheet" type="text/css" href="css/stil.css">
	<link rel="stylesheet" href="../css/slt.css">
	<script src="../javascript/dropdwn.js"></script>
	
</head>

<body>
	<div class="wrapper">
	
		
		<div class="header">
				<div id="logo">
				<div id="mc">
				<div class="m">M</div>	
				<div class ="c">C</div>
			</div>
			<div id="textLogo">
				<p>rlando</p>
			</div>
				
			</div>
			<?php
			
			if(!isset($_SESSION['login']))
				print "<div class='LoginField'>
				<form id='login' action='..\index.php' method='POST'>
					<fieldset>
					
					<label for='username' >Username:</label>
					<input type='text' name='username' id='username'  maxlength='25' />
					 
					<label for='password' >Šifra:</label>
					<input type='password' name='sifra' id='sifra' maxlength='20' />
					 
					<input type='submit' name='log-in' value='Login' />
					
					</fieldset>
			</form>
			</div>";
		
			if(isset($_SESSION['login'])){
				  print "<div><form id='logout-forma' action='admin-panel.php' method='POST'><input type='submit' name='logout' value='Logout' /></form></div>
				 <br>
				 <form action='admin-panel.php' method='get'>
					<button>Admin panel</button>
				</form>";
			 }
			
			
			$success = false;
			if (isset($_POST['log-in']) && !empty($_POST['username']) && !empty($_POST['sifra'])) 
			{
				$user = $_POST['username'];
				$pass = $_POST['sifra'];
				
				$xml=simplexml_load_file("..\login.xml") or die("Error: Cannot load login.xml");
				
					if($xml->{'username'} == $user && $xml->{'password'}==$pass) {
						$_SESSION['login'] = true;

						$success = true;
					}
				}
				
			
			if($success) {
				header("Location: admin-panel.php");
			}
			
			
			
			
			?>

		</div>
	<br>
	
	<div class="navigation">
		<nav>
			<ul>
				<li class='active'><a href="../index.php">Početna</a></li>
				<li><a href="novosti.php">Vijesti</a></li>
				<li><a href="onama.php">O nama</a></li>
				<li><a href="contact.php">Kontakt</a></li>
				<li><a href="informacije.php">Informacije</a></li>
				<li>
					<a onclick="myFunction()" class="dropbtn">Više</a>
					  <div id="myDropdown" class="dropdown-content">
					    <a href="gallery.php">Galerija</a>
					     <a href="slider.php">Slider</a>
					  </div>					
				</li>
			</ul>
		</nav>
		<br></br>
	</div>
	<br>
	<h2>Novosti vezane za masažu.</h2>

	<div class="section">
			<h3>New tehnologies </h3>
			<img src="../images/private.png" alt="slika1">
			<p>The new tehnoogies of massage are very popular these days. This tretman counts big advantages and much more new tretmans. Also this tehnology provide a big responsibilities and so on.
			</p>
		</div>

		<div class="section">
			<h3>New methodologies</h3>
			<img src="../images/sauna-steam.png" alt="slika2">
			<p>
				All about this methodology is known from period much more before. This tehnology and methodology is very common now, that is mosty because diferent happenings about other methodologys. This topic is much more bigger.
			</p>
		</div>

		<div class="section">
			<h3>New Informations</h3>
			<img src="../images/retreat.png" alt="slika3">
			<p>
				All about this methodology is known from period much more before. This tehnology and methodology is very common now, that is mosty because diferent happenings about other methodologys. This topic is much more bigger.
			</p>
		</div>

		<div class="section">
			<h3>New tehnologies</h3>
			<img src="../images/private.png" alt="slika1">
			<p>The new tehnoogies of massage are very popular these days. This tretman counts big advantages and much more new tretmans. Also this tehnology provide a big responsibilities and so on.
			</p>
		</div>

		<div class="section">
			<h3>New methodologies</h3>
			<img src="../images/sauna-steam.png" alt="slika2">
			<p>
				All about this methodology is known from period much more before. This tehnology and methodology is very common now, that is mosty because diferent happenings about other methodologys. This topic is much more bigger.
			</p>
		</div>

		<div class="section">
			<h3>New Informations</h3>
			<img src="../images/retreat.png" alt="slika3">
			<p>
				All about this methodology is known from period much more before. This tehnology and methodology is very common now, that is mosty because diferent happenings about other methodologys. This topic is much more bigger.
			</p>
		</div>

		<div class="section">
			<h3>New tehnologies</h3>
			<img src="../images/private.png" alt="slika1">
			<p>The new tehnoogies of massage are very popular these days. This tretman counts big advantages and much more new tretmans. Also this tehnology provide a big responsibilities and so on.
			</p>
		</div>

		<div class="section">
			<h3>New methodologies</h3>
			<img src="../images/sauna-steam.png" alt="slika2">
			<p>
				All about this methodology is known from period much more before. This tehnology and methodology is very common now, that is mosty because diferent happenings about other methodologys. This topic is much more bigger.
			</p>
		</div>

		<div class="section">
			<h3>New Informations</h3>
			<img src="../images/retreat.png" alt="slika3">
			<p>
				All about this methodology is known from period much more before. This tehnology and methodology is very common now, that is mosty because diferent happenings about other methodologys. This topic is much more bigger.
			</p>
		</div>
		


	<footer>
		<div class = "footsection">
			<ul>
				<li><a href="http://www.facebook.com"><img src="../images/facebook1.png" alt = "Facebook"></a></li>
				<li><a href="http://www.gmail.com"><img src="../images/googleplus.png" alt="Google"></a></li>
				<li><a href="http://www.twitter.com"><img src="../images/twitter1.png" alt="Twitter"></a></li>
			</ul>
		</div>
	</footer>

</div>
</body>