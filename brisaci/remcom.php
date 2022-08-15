<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	require "../connect.php";
	$dl = "DELETE FROM komentari WHERE id = '" . $id . "'";
	mysqli_query($conn, $dl); 
	echo "Komentar je uklonjen!";
}
?>
