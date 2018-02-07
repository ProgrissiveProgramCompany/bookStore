<?php
include "connection.php";
$isbn = $_GET['isbn'];
$query = "select * from books WHERE isbn ='$isbn'";
$result = $conn->query($query);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $book = array("title" => $row['title'],
            "author" => $row["author"],
            "description" => $row["descrption"],
            "category" => $row['category'],
            "pic" => $row['pic'],
            "isbn" => $row['isbn'],
            "price" => $row['price']
        );
    }
    echo json_encode($book);
} else {
    echo "404";
}

?>