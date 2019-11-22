<?php

class UserModel{
	private $username;

	function get_username(){
		return $this->username;
	}
	function set_username(){
    	$this->username = $username;
	}

	function UserModel($username){
		$this->username = $username;
	}
}
?>
