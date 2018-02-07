<?php
session_start();
$serverName = "localhost";
$userName = "root";
$password= "";
$databaseName = "knowledgeshop";

$conn = new mysqli( $serverName , $userName , $password , $databaseName );

if ($conn->connect_error) {
    die("Connection failed: " . $GLOBALS['conn']->connect_error);
}
else{

}


?>