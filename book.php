<?php 

/**
 * 
 */
class book
{
	public $id;
	public $name;
	public $score;

	function __construct($id,$name,$score)
	{
		echo $this->$id = $id;
		echo $this->$name = $name;
		echo $this->$score = $score;

		// echo $this->id=3;
		
	}
}



 ?>