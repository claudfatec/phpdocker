<?php
/*conexão com database
 *@return object Connection to a MySQL server
 */
function getDB()
{
	$servername = 'localhost';
	$database = 'teste';
	$username = 'user';
	$password = 'password';
// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
	if (mysqli_connect_error()) {
   		echo mysqli_connect_error();
		exit;
	}
	return $conn;
}
