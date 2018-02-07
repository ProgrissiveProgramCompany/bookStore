<?php

include "connection.php";

$quantity = $_GET['quantity'];
$isbn =     $_GET['isbn'];

echo "quantity is ".$quantity."<br>";
$id = $_SESSION['id'];
$sql;
if($quantity == 0) {
    $sql = "delete from cart where isbn='$isbn' and userid = '$id'";
    echo"choice 1";
}
else{
    $sql="UPDATE cart SET quantity='$quantity' WHERE isbn='$isbn' and userid = '$id'";
    echo"choice 2";
}
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>