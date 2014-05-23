<?php

class Projects extends Controller
{
	public function index()
	{
		$view = new View('Projects','index');
		$view->render();
	}
}

?>