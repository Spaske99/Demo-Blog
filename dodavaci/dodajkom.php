<?php

	$conn = "";
	$q ="";
	
if (isset($_POST['submit'])){
	if (isset($_POST['komentar'])){
		if(!empty($_POST['komentar'])){
			$komentar = $_POST['komentar'];
			$username = $_POST['username'];
			$kategorija = $_POST['kategorija'];
			$idvest = $_POST['idvest'];
				
			include "../connect.php";
			echo $username . " " . $kategorija . " " . $idvest . " " . $komentar;
	
			$q = "INSERT INTO komentari (username, kategorija, idvest, komentar, vreme) VALUES ('{$username}', '{$kategorija}', '{$idvest}', '{$komentar}', NOW())";
		}else{
			echo "Unesite komentar!";
}

}		
	if(mysqli_query($conn, $q) === TRUE){
		echo "  Vas komentar je dodat";
	}
}		
?>

