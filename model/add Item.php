<?php

include "connection.php";
$isbn=$_GET['isbn'];

$id=$_SESSION['id'];


$sql = "select * from cart  WHERE isbn='$isbn' and userid = '$id'";

$result = $conn->query($sql);
if($result->num_rows>0){
$quantity;

    while($row = $result->fetch_assoc()) {
        $quantity = $row['quantity'];
    }

    $quantity = $quantity+1;
    $sql ="UPDATE cart SET quantity='$quantity' WHERE isbn='$isbn' and userid = '$id'";
    $result = $conn->query($sql);

}
else{

    $sql = "insert into cart(userid,isbn,quantity) VALUES ('$id','$isbn',1)";
$conn->query($sql);
}


?>