<?php

require 'application/libs/View.php';

class Messages extends Controller
{
	public function index()
	{
		$view = new View('Messages','index');
		$view->render();
	}

	public function addNewSubject()
	{
		$view = new View('Messages','addNewSubject');
		$view->render();
	}
}

?>