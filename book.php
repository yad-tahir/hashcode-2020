<?php 

/**
 * 
 */
class book
{
	public $id;
	public $name;
	public $score;

	public function __construct($id,$name,$score)
	{
		 $this->id = $id;
		 $this->name = $name;
		 $this->score = $score;
	}
}

?>