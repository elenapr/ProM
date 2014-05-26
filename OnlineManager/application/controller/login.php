<?php

class Login extends Controller
{
	public function index()
	{	
		// Cazul in care userul intra pentru prima oara in aplicatie
		if(!isset($_POST['username']) || !isset($_POST['password']))
		{
			require 'application/views/Login/index.php';
			return;
		}

		$user_data['username'] = 'Chirila Vasile Tiberiu';
		$_SESSION['user_data']=	$user_data;
		session_commit();

		header('Location: projects');
		exit();		

/* 		require './application/controller/menu.php';
   	    $home = new Menu();
   	    $home->index();
*/

		// In cazul in care user-ul se logheaza, action-ul este tot aceasta functie in care se pun in POST parametrii pentru username si password
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == '' || $username == 'username')
		{
			require 'application/views/Login/index.php';

			echo '<script language="javascript">';
			echo 'alert("Please enter the username!")';
			echo '</script>';

			return;
		}

		if($password == '' || $password == 'password')
		{
			require 'application/views/Login/index.php';

			echo '<script language="javascript">';
			echo 'alert("Please enter the password!")';
			echo '</script>';

			return;
		}
	}
}

?>