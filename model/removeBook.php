<?php
include "connection.php";
$isbn = $_GET['isbn'];

$sql = "DELETE FROM books WHERE isbn='$isbn'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>