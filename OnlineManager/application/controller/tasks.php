<?php
require 'application/libs/View.php';
class Tasks extends Controller
{
	public function index()
	{
		$view = new View('Tasks','index');
		$view->render();
	}
	 public function display ()
	{
			$view = new View('Tasks','DisplayTask');
		$view->render();
	}
		 public function add ()
	{
			$view = new View('Tasks','add');
		$view->render();
	}
		 public function edit ()
	{
			$view = new View('Tasks','edit');
		$view->render();
	}
	
}

?>