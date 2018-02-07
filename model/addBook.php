<?php

include "connection.php";
$title = $_GET['title'];
$author = $_GET['author'];
$description = $_GET['description'];
$price = $_GET['price'];
$category = $_GET['category'];
$pic = $_GET['pic'];
$query = "insert into books(title,author,descrption,price,pic,category)
values('$title','$author','$description','$price','$pic','$category')
";
$result = $conn->query($query);
if ($conn->query($sql) === TRUE) {
    echo "insertion is done seccssfully";
}
$conn->close();
?>