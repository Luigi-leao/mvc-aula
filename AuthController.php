<?php
require_once 'model/User.php';

class AuthController{
	public function loginForm(){
		include 'view/login.php';
	}

	public function login($request){
		$user = new User();
		if ($user->authenticate($request['parametro'], $request['password'])){
			include 'view/success.php';
		}else{
			include 'view/login.php'; 
		}
	}
}
?>