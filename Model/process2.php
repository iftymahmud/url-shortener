<?php
require_once 'db.php';


if (isset($_POST['submit']))
{
    if ((!isset($_POST['cusUrlInput'])))
    {
        $error = "*" . "The field cannot remain empty";
    }
    else
    {
        $givenUrl = $_POST['cusUrlInput'];
        $cusUrl = $_POST['cusInput'];
        $shortenedUrl = "http://localhost/x/mvc/view/" . $cusUrl;

        $sql = "INSERT INTO `urlTable` (`givenUrl`, `shortenedUrl`) VALUES ('$givenUrl', '$shortenedUrl')";   
        $result =  $conn->query($sql);

        

    }
}





?>