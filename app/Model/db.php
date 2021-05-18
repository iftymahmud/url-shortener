<?php

// Server name must be localhost
$servername = "127.0.0.1";

// In my case, user name will be root
$username = "root";

// Password is empty
$password = "";


$database = "urlShortenerDB";

// Creating a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
	die("Connection failure: ". $conn->connect_error);
}

// Closing connection
// $conn->close();

?>
