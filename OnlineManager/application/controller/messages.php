<?php

class Messages extends Controller
{
	public function index()
	{
		$view = new View('Messages','index');
		$view->render();
	}
}

?>