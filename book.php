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
		 $this->$id = $id;
		 $this->$name = $name;
		 $this->$score = $score;

	}

}



 ?>