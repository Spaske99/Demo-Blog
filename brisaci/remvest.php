<?php 
if(isset($_GET['idvest'])){
	$idvest = $_GET['idvest'];
	require "../connect.php";
	$dl = "DELETE FROM kategorije WHERE idvest = '" . $idvest . "'";
	mysqli_query($conn, $dl);
	echo "Vest je uklonjena!";
}
?>
