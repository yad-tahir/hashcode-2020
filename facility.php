<?php 

/**
 * 
 */

require_once 'book.php';

class facility
{
	public $id;
	public $name;
	private $libraries;
	private $scans;
	private $queuedRegistration;

	function __construct($id,$name)
	{
		$this->id=$id;
		$this->name=$name;

		$this->libraries=array();
		$this->scans=array();
		$this->queuedRegistration=array();

	}//construct

	function scan($book,$library_id)
	{
		$scan = new book($book->id,$book->name,$book->score);
		array_push($scans,$scan);
		return $scan;

	}//scan()

	function register($libary)
	{
		return array_push($libraries, $library);
	}//reigster

	function queue()
	{
		$data = array();

		foreach ($libraries as $library) {
			array_push($data, [ $library->id => $library->sign_up_duration ] );	
		}
		print_r($data);

	}//Queue()

}//Class facility



 ?>