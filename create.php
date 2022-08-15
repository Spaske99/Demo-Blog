<?php
if (isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)){
	echo "Morate uneti korisničko ime i lozinku!";
	die();
}
include "connect.php";
$rez = mysqli_query($conn, "SELECT username FROM korisnici WHERE username='" . $username . "'");
if(mysqli_num_rows($rez) == 1){
	echo "Korisničko ime " . $_POST['username'] . " već postoji!";
	die ();
}else{
	$sql = "INSERT INTO korisnici (username, password) VALUES ('{$username}', '$_POST[password]')";
	echo "Uspešna registracija " . $username;
}

if(mysqli_query($conn, $sql) === TRUE){
		echo "<p>Korisnik je dodat</p>";
}
}
?>



	<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="wrapper">
<h1 id="naslov">NAŠE VESTI</h1>
<h2>Dobrodošli na naš zvanični portal</h2>
<nav id="nav">
<form  action="vesti.php" method="post" class="fm">
    <fieldset class="fs">
	<input type="hidden" id="username" name="username" value="<?php echo $_POST['username']; ?>" />
      <button id="politika" name="politika" type="submit"  >POLITIKA</button>
	  <button id="ekonomija" name="ekonomija" type="submit"  >EKONOMIJA</button>
	  <button id="sport" name="sport" type="submit"  >SPORT</button>
    </fieldset>
</nav>

</div>
</body>
</html>
