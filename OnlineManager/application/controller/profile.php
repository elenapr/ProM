<?php

class Profile extends Controller
{
	public function index()
	{
		$view = new View('Profile','index');
		$view->render();
	}
}

?>