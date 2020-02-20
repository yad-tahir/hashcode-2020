<?php 

/**
 * 
 */
class library
{
	public $id;
	public $name;
	public $scan_per_day;
	public $sign_up_duration;
	public $books;

	function __construct($id,$name,$scan_per_day,$sign_up_duration)
	{
		$this->$id = $id;
		$this->$name = $name;
		$this->$scan_per_day = $scan_per_day;
		$this->sign_up_duration = $sign_up_duration;
		$this->books = array();
		
	}//constructor()

	function getBook($book,$key)
	{
		return $this->books[$key];
	}//scan();

	function queueBooks($books)
	{
		return $this->books=rsort($books);

	}//queueBooks()

}//Class Library





 ?>