<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset ="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include "connect.php";
$u = "SELECT * FROM komentari WHERE idvest={$rw['idvest']}";
	$k = mysqli_query($conn, $u);
	if(mysqli_num_rows($k) > 0){
	while ($row = mysqli_fetch_assoc($k)){
		?>

	<div id="poljekom">
	<a href="brisaci/remcom.php?id= <?php echo $row['id']; ?>"><?php if(($_POST['username']==$row['username']) || ($_POST['username']=="admin")){echo "Obrisi komentar";} ?></a>
	<p><?php echo $row['id']; ?></p>
	<p><b>Korisnik: </b><?php echo $row['username']; ?></p>
	<p><b>Komentar: </b><?php echo $row['komentar']; ?></p>
	<p><b>Vreme: </b><?php echo $row['vreme']; ?></p>
	</div>

	<?php
}
	}else{
		echo "Nema komentara."."<br>";
	}
?>
</body>
</html>