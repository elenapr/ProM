<?php
require 'application/libs/View.php';
class Projects extends Controller
{
	public function index()
	{
		$view = new View('Projects','index');
		$view->render();
	}
	
	public function addNewProject()
	{
		$view = new View('Projects','addNewProject');
		$view->render();
	}
	
	public function topBarAction($tag)
	{	
		switch ($tag) 
		{
			case '0':
				header('Location: menu');
				break;
			case '1':
				header('Location: projects');
				break;
			case '2':
				header('Location:: tasks');
				break;
			case '3':
				header('Location: messages');
				break;
			case '4':
				header('Location: files');
				break;
			case '5':
				header('Location: profile');
				break;
		}
	}
}

?>