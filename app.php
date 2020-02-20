<?php 

	require_once 'library.php';
	require_once 'book.php';
	require_once 'facility.php';

	echo "App starting <br>";

	$facility = new facility(0,'Google Facility');
	$library = new library(0,'AUIS Lirary',3,5);
	$books = array();

	// for ($i=0; $i < 5 ; $i++) { 
	// 	array_push($books ,  );	
	// }

	// print("<pre>".print_r($books,true)."</pre>");
	$data = new book( 	0, ('Book number 0') , 5 );
	print_r( $data );
 ?>



<script type="text/javascript">
	




</script>