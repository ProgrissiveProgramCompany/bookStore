<?php
require "connection.php";
$isbn=$_GET['isbn'];
$comment=$_GET['comment'];
$id = $_SESSION['id'];


$query = "insert into comments (userid,isbn,comment) VALUES ('$id','$isbn','$comment')";
$conn->query($query);
echo $conn->error;
?>