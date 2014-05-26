<?php

require 'application/libs/View.php';

class Menu extends Controller
{	
	private $model;

	public function __construct()
	{
		$this->model = $this->loadModel('menumodel');
	}

	public function index()
	{
		$projects[0]['name'] = 'New Project';
		$projects[1]['name'] = 'Another Project';

		$taskData['task'] = "Marginirea body-ului";
		$taskData['project'] = "Project name";
		$taskData['added_by'] = "Chirila Vasile Tiberiu";

		$taskArray;

		for($i=0;$i<5;$i++)
			$taskArray[$i] = $taskData;

		$messageData['message'] = "This is my message for us !";
		$messageData['project'] = "Project name";
		$messageData['added_by'] = "Chirila Vasile";

		$messageArray;

		for($i=0;$i<10;$i++)
			$messageArray[$i] = $messageData;

		$view = new View('Menu','index');
		$view->setNewProjects($projects);
		$view->setTodayTasks($taskArray);
		$view->setTodayMessage($messageArray);
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