<?php 
class Kom{
	
	public $user;
	
	public function __construct($user){
		$this->user = $user;
	}
	public function admin(){
		if ($this->user === "admin"){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}

?>