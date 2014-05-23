<?php 

class View
{
	var $path;
	var $name;

	function __construct($path,$name)
	{
		$this->path = $path;
		$this->name = $name;
	}

	public function render()
	{
		require 'application/views/'.$this->path.'/'.$this->name.'.php';
	}
}

?>