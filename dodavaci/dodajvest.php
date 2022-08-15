<?php

$conn = "";
$q ="";

if (isset($_POST['submit'])){
	if (isset($_POST['vest'])){
		if(!empty($_POST['vest'])){
			$vest = $_POST['vest'];
			$kategorija = $_POST['kategorija'];
			
			include "../connect.php";
			echo  $kategorija . " " . $vest;
	
			$q = "INSERT INTO kategorije (kategorija, vest) VALUES ('{$kategorija}', '{$vest}')";
		}else{
			echo "Unesite vest";
	
}
}		
	
	if(mysqli_query($conn,$q) === TRUE){
		echo "Nova vest je dodata";
	}
		
}		
?>