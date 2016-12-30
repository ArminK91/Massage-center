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
	<script src="../javascript/lookup.js"></script>
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
				<li><a class="info" href="informacije.php">Informacije</a></li>
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
	
	<div class="gallery" align="center">
	<h2> Galerija Slika </h2>
	<br />

	<div class="thumbnails">
		<img onmouseover="preview.src=this.src"  id="myImg" name="img1" src="../images/private.png" onClick="ime(this.id);" alt=""/>
		<img onmouseover="preview.src=this.src" id="img2" name="img2" src="../images/img1.jpg" onClick="ime(this.id);" alt=""/>
		<img onmouseover="preview.src=this.src" id="img3" name="img3" src="../images/img2.jpg" onClick="ime(this.id);" alt=""/>
		<img onmouseover="preview.src=this.src" id="img4" name="img4" src="../images/img3.jpg" onClick="ime(this.id);" alt=""/>
		<img onmouseover="preview.src=this.src" id="img5" name="img5" src="../images/img4.jpg" onClick="ime(this.id);" alt=""/>
	</div><br/>

	<div class="preview" align="center">
		<img name="preview" src="../images/img1.jpg" alt=""/>
	</div>

<div id="myModal" class="modal">
  <span id="spanclose" class="close" onClick="close();">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
	
</div>
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












<script>

var modal = document.getElementById('myModal');

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.style.display = "none";
}

window.onkeydown = function( event ) {
    if ( event.keyCode == 27 ) {
    	modal.style.display = "none";
    }
};


</script>
</body>