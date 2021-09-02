<?php
	$conn = mysqli_connect( 'localhost', 'username', 'password', 'database name' );
	// check connection
if ( ! $conn ) {
	echo 'Connection error: ' . mysqli_connect_error();
}
