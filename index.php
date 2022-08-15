<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrapper">
	<div id="header">
			<div id="logo">
				<h3><a href="index.php">NPRESS</a></h3>
			</div>
			<div id=menu>
				<ul>
					<li><a href="registracija.php">Registracija</a></li>
				</ul>
			</div>
	</div>
	<div id="okvir">
		<div>
			<h1 id="naslov">NPRESS.rs</h1>
			<h3 id="podnaslov">Prijava</h3>
		</div>
		<div class="box">
			<form id="forma" name="unos" action="login.php" method="post">			
				<span class="form_polje"><input type="text" name="username" id="username" value="" placeholder="Unesite korisnicko ime" class="polje"></span>
				<br><br>
				<span class="form_polje"><input type="password" name="password" id="password" value="" placeholder="Unesite isfru" class="polje"></span>
				<br><br>
				<span id="dugme"><input type="submit" name="submit" value="Prijava" id="prij"></span>
			</form>
		</div>
	</div>
	<div id="reg">
			<br>
			<a href="registracija.php">REGISTRUJ SE OVDE</a>
	</div>
</div>
</body>
</html>