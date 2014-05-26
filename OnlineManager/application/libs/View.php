<?php 

class View
{
	var $path;
	var $name;
	var $data;

	function __construct($path,$name)
	{
		$this->path = $path;
		$this->name = $name;
	}


	//Home View Functions
	function setTodayTasks($sender)
	{
		$this->data['today_tasks'] = $sender;
	}
	function setNewProjects($sender)
	{
		$this->data['newProjects'] = $sender;
	}
	function setTodayMessage($sender)
	{
		$this->data['newMessage'] = $sender;
	}

	public function render()
	{
		require 'application/views/'.$this->path.'/'.$this->name.'.php';
	}
}

?>