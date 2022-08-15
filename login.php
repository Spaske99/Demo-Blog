	<?php 
require "connect.php";
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)){
	echo "Morate uneti korisničko ime i lozinku!";
	die();
}else{
	$rez = mysqli_query($conn, "SELECT username,password FROM korisnici WHERE username='" . $username . "' AND password='" . $password . "'")
	or die(mysqli_error());
}
	if (mysqli_num_rows($rez) == 1){
	echo  $_POST['username'] . " dobrodošli!";
	$username = $_POST['username'];
	?>
	<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="wrapper">
<div id="okvir">
<h1 id="naslov">NAŠE VESTI</h1>
<h2>Dobrodošli na naš zvanični portal</h2>
<nav id="nav">
<form  action="vesti.php" method="post" class="fm" >
	<input type="hidden" id="username" name="username" value="<?php echo $_POST['username']; ?>" />
      <button id="politika" name="politika" type="submit"  >POLITIKA</button>
	  <button id="ekonomija" name="ekonomija" type="submit"  >EKONOMIJA</button>
	  <button id="sport" name="sport" type="submit"  >SPORT</button>
</nav>
</div>
</div>
</body>
</html>
<?php
	
	}else{
		echo "Neuspešno. Neispravno korisničko ime ili lozinka";
	}
?>
