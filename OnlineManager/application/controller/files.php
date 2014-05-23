<?php

class Files extends Controller
{
	public function index()
	{
		$view = new View('Files','index');
		$view->render();
	}
}

?>