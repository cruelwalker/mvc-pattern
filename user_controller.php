<?php
class UserController{

	function UserController(){

	}

	function creat(){
		//creat user in the db
	}
	function login($username, $password){
		//checkes if the user is in the db
		if ($this->authenticate($username, $password)) {
			//first we need to start the session for the user...
			session_start();
			//instasiate the usermodel to the session
			$user = new UserModel($username);
			//set user objcet to the session
			$_SESSION['user'] = $user;			
			// if authenticate return true
			return true;
		}else{
			// not authentic
			return false;
		}
	}
	function logout(){
		//does logout procedure
		session_start();
		session_destroy();
	}
	static function authenticate($u, $p){
		$authentic = false;
		//check db

		if ($u == 'admin' && $p == 'admin') $authentic = true;
		return $authentic;
	}
}

?>