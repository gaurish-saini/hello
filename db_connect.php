<?php
	$conn = mysqli_connect( 'localhost', 'root', '', 'helloworld' );
	// check connection
if ( ! $conn ) {
	echo 'Connection error: ' . mysqli_connect_error();
}
