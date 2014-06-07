<?php

require 'application/libs/View.php';

class Profile extends Controller
{
	public function index()
	{
		$view = new View('Profile','index');
		$view->render();
	}

	public function edit()
	{
		$view = new View('Profile','edit');
		$view->render();
	}
}

?>