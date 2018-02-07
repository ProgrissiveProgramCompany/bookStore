<?php
require "connection.php";
// remove all session variables
echo $_SESSION['id'];
session_unset();
unset($_SESSION["id"]);
echo $_SESSION['id'];
$conn->close();

?>