<?php 

class Person {

	public $name;
	public $age;
	public $employed;
	
	
	public function returnName()
	{
		echo $this->name . PHP_EOL;
	}
	
	public function getOlder()
	{
		echo $this->age+1 . PHP_EOL;
	}
	
	public function echoAge()
	{
		echo $this->age . PHP_EOL;
	}
	
	// public function quitJob() 
	// {
	// 	$boolean = false;
	// 	echo $this->name . " has quit his job" . PHP_EOL;
		
	// }
	
	public function getJob($boolean) 
	{
		// $boolean = true;
		if ($boolean) {
		 	echo $this->name . " has a job" . PHP_EOL;
		} else {
			echo $this->name . " has quit his job" . PHP_EOL;
		}
	}
	
	public function passAway() 
	{
	
		echo $this->name . " has died" . PHP_EOL;
	}

}