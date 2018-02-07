<?php

include "connection.php";


$id = $_SESSION['id'];
$sql;
$sql = "update cart set bought = false where   userid = '$id'  ";

$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>