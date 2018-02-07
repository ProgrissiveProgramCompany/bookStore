<?php
require "connection.php";

$title = $_GET['title'];
$author=$_GET['author'];
$desc=$_GET['desc'];
$price=$_GET['price'];
$cat =$_GET['cat'];
$isbn=$_GET['isbn'];
/*
echo $desc;echo "<br>";
echo $title;echo "<br>";
echo $cat;echo "<br>";
echo $author;echo "<br>";
echo $price;echo "<br>";
*/
$query = "update books
          set title='$title',
              author='$author',
               descrption ='$desc',
               price='$price',
               category='$cat' 
                where isbn='$isbn'";



$result = $conn->query($query);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>