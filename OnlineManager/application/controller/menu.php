<?php

require 'application/libs/View.php';

class Menu extends Controller
{	
	var $caca;

	public function index()
	{
		$this->caca = "MAMA";

		$view = new View('Menu','index');
		$view->render();

		//require 'application/views/Menu/index.php';
	}
}

?>