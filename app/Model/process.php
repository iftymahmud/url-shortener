<?php
require 'db.php';



if (isset($_POST['submit']))
{
    if ((!isset($_POST['urlInput'])))
    {
        $error = "*" . "The field cannot remain empty";
    }
    else
    {
        $givenUrl = $_POST['urlInput'];
        $shortenedUrl = "http://localhost/x/mvc/view/" . generateRandomString();

        $sql = "INSERT INTO `urlTable` (`givenUrl`, `shortenedUrl`) VALUES ('$givenUrl', '$shortenedUrl')";   
        $result =  $conn->query($sql);

        
    }
}



function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>