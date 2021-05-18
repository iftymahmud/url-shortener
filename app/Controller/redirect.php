<?php

require_once '../Model/db.php';



if(isset($_REQUEST['uri'])){
	
$half = "http://localhost/x/mvc/view/". $_REQUEST['uri'];



 	$get = "SELECT `givenUrl` FROM `urlTable` WHERE `shortenedUrl`='$half'";

	if(!$result = $conn->query($get)){
		die('There was an error running the query [' . $conn->error . ']');
	}
	
	$flag = 0;
	while($row = $result->fetch_assoc()){
		$flag = 1;
		header('location: '. $row['givenUrl']);
		exit();
	}

	if($flag==0){
		header('location: http://localhost/x/mvc/controller/404.php');
		exit();
	}


	
}

?>