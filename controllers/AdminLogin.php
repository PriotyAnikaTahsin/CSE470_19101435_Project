<?php

Class AdminLogin extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Login";

 	 	if(isset($_POST['email']))
 	 	{
 	 		$user = $this->loadModel("AdminUser");
 	 		$user->signup($_POST);

 	 	}elseif(isset($_POST['username']) && !isset($_POST['email'])){

 	 		$user = $this->loadModel("AdminUser");
 	 		$user->login($_POST);
 	 	}

		$this->view("minima/AdminLogin",$data);
	}

}