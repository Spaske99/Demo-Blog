<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
	<div id="header">
			<div id="logo">
				<h3><a href="index.php">NPRESS</a></h3>
			</div>
			<div id=menu>
				<ul>
					<li><a href="index.php">Prijava</a></li>
				</ul>
			</div>
	</div>
	<div id="okvir">
		<div>
			<h1 id="naslov">NPRESS.rs</h1>
			<h3 id="podnaslov">Registracija</h3>
		</div>
		<div class="box">
			<form id="forma" name="unos" action="create.php" method="post">	
				<span class="form_polje"><input type="text" name="username" id="username" value="" placeholder="Unesite korisnicko ime" class="polje"></span>
				<br><br>
				<span class="form_polje"><input type="password" name="password" id="password" value="" placeholder="Unesite isfru" class="polje"></span>
				<br><br>
				<span id="dugme"><input type="submit" name="submit" value="Registruj" id="prij"></span>
			</form>
		</div>
	</div>
</div>
</body>
</html>