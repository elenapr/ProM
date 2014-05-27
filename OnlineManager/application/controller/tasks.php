<?php
require 'application/libs/View.php';
class Tasks extends Controller
{
	public function index()
	{
		$view = new View('Tasks','index');
		$view->render();
	}
}

?>