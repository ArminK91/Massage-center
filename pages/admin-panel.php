<?php
error_reporting(E_ERROR | E_PARSE);
	date_default_timezone_set("Europe/Sarajevo");
			session_start();
			if(isset($_POST['logout'])){
				unset($_SESSION['login']);
				session_destroy();
				echo '<script>alert("Niste vise logovani!");</script>';
			}
	include 'funkcije.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Naslovna - Massage Center</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/stil.css">
	<link rel="stylesheet" type="text/css" href="../css/logo.css">
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
				header("Location: ../index.php");
		
			if(isset($_SESSION['login'])){
				 print "<div><form id='logout-forma' action='admin-panel.php' method='POST'><input type='submit' name='logout' value='Logout' /></form></div>";
			
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
		</div>
		<br>

		
		<div id="unos-dokumenta">
		<form id="forma-unos" method="POST" action="admin-panel.php">
			<label>Ime dokumenta</label>
				<br>
				<input type='text' id='ime' name='ime' />
				<br>
				
				<label>Sadržaj dokumenta</label>
				<br>
				<textarea name='sadrzaj' id='sadrzaj' placeholder="Unesite sarzaj dokumenta"></textarea>
				<br>
				<input type='submit' id='dodaj' name='dodaj' value="Spasi dokument"/>
		</form>
		<div>
		
		<?php
		if(isset($_POST['dodaj']) && !empty($_POST['ime']) && !empty($_POST['sadrzaj'])){
			$ime_=htmlspecialchars($_POST['ime']);
			$sadrzaj_=htmlspecialchars($_POST['sadrzaj']);
			$veza = new PDO("mysql:dbname=dokumenti;host=localhost;charset=utf8", "root", "");
			$veza->exec("set names utf8");
			$unos = $veza->query("INSERT INTO dokument SET ime = '".(string)$ime_."', sadrzaj = '".(string)$sadrzaj_."';");
			
		}
		
		?>
		<form method="POST" action="admin-panel.php"><input type='submit' name='pdf' value='Generiši izvještaj' /></form>
		<form method="POST" action="admin-panel.php"><input type='submit' name='xmlbaza' value='Spasi podatke u bazu' /></form>
		
		
		<div id="svi-fajlovi">
		<h3>Svi dokumenti</h4>
		<?php
			$veza = new PDO("mysql:dbname=dokumenti;host=localhost;charset=utf8", "root", "");
			$veza->exec("set names utf8");
			$veza = $veza->query("select ime, sadrzaj from dokument");
			foreach ($veza as $data) {

				echo '<div class="dokument-item"><h4>' . $data['ime'] . '</h4>';
				echo '<p>' . $data['sadrzaj'] . '</p></div>';

			}
		
			require('../libs/fpdf.php');

			$pdf = new FPDF();
			$pdf->AddPage();
			$pdf->SetFont('Arial','B',19);
			$pdf->Write(3, 'Izvjestaj');
			$pdf->Ln(15);
			$xml = simplexml_load_file("dokumenti.xml");
			foreach ($xml->dokument as $dokument) {
				
				$pdf->Write(2, 'Naziv dokumenta: ' . $dokument->ime);
				$pdf->Ln(10);
				
				$pdf->Write(2, 'Sadrzaj dokumenta: ' . $dokument->sadrzaj);
				$pdf->Ln(10);
				$pdf->Ln(10);

			}
			$pdf->Output('F', 'izvjestaj.pdf');
			
			
			 if(isset($_POST['xmlbaza'])){
				 $veza = new PDO("mysql:dbname=dokumenti;host=localhost;charset=utf8", "root", "");
				 $veza->exec("set names utf8");
				 $xml = simplexml_load_file("dokumenti.xml");
				foreach ($xml->dokument as $dokument) {
					 $unos = $veza->query("INSERT INTO dokument SET ime = '".(string)($dokument->ime)."', sadrzaj = '".(string)($dokument->sadrzaj)."';");

				 }
				
			 }
		
		?>
		</div>
	</div>

</body>