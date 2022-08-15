<?php
	function autoload($c){
		require_once "classes/" . str_replace("\\", "/", $c) . ".class.php";
	}
	spl_autoload_register('autoload');
	
	?> 