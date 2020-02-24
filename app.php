<?php

	// require_once 'library.php';
	require_once 'book.php';
	// require_once 'facility.php';

	echo "App starting <br>";

	// $facility = new facility(0,'Google Facility');
	// $library = new library(0,' Lirary 0',,2);
	// $library = new library(1,' Lirary 1',3,3);

	// $books = array();

	// for ($i=0; $i < 5 ; $i++) {
	//	array_push($books ,  );
	// }

	// print("<pre>".print_r($books,true)."</pre>");
	$books = new book(	0, 'Book number 0' , 5 );
	print_r($books);
 ?>
