
<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
echo "Korisnik: " . $_POST['username'] . "<br>";

$oblast = "";
if(isset($_POST['politika'])){
	$oblast='politika';
 }
if(isset($_POST['ekonomija'])){
	$oblast='ekonomija';
 }
if(isset($_POST['hronika'])){
	$oblast='hronika';
 }
if(isset($_POST['sport'])){
	$oblast='sport';
 }
	echo "<h1>Vesti: {$oblast}</h1>" . "<br>";
	
	include "connect.php";
		$query = "SELECT * FROM kategorije WHERE kategorija='{$oblast}'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0){
		while($rw = mysqli_fetch_assoc($result)){
			echo "<h3> Vest: {$rw['vest']} </h3>". "<br>";
			$kategorija = $rw['kategorija'];
?>

<a href="brisaci/remvest.php?idvest= <?php echo $rw['idvest']; ?>"> <?php if($_POST['username']=="admin"){echo "Obrisi vest";} ?></a>

			<form id="forma" name="unos" action="dodavaci/dodajkom.php" method="POST">
				<input type="hidden" name="username" value="<?php echo $_POST['username']; ?>" />
				<textarea name="komentar"></textarea>
				<input type="hidden" name="idvest" value="<?php echo $rw['idvest']; ?>" />
				<input type="hidden" name="kategorija" value="<?php echo $rw['kategorija']; ?>" />
				<input type="submit" name="submit" value="Dodaj komentar" />
			</form>
			
<?php				
			include "prikaz.php";	
		}
require_once "config.php";

$kor = new Kom($_POST['username']);
$k = $kor->admin();

if ($k){
	echo "<br/ >";
	echo "Dodaj vest kategorija: " . $kategorija;
?>
	<br>
			<form id="forma_vest" name="unos_vesti" action="dodavaci/dodajvest.php" method="POST">
				<textarea name="vest"></textarea>
				<input type="hidden" name="kategorija" value="<?php echo $kategorija; ?>" />
				<input type="submit" name="submit" value="Dodaj vest" />
			</form>
	<?php
}
}
?>
</body>
</html>