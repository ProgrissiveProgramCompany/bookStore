<?php

include "connection.php";
$username = $_GET['userName'];
$password = $_GET['password'];

$query = "select * from users where username =  '$username' and password ='$password'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $type = $row['type'];
        echo json_encode($type);

        $_SESSION['id'] = $row["id"];
        break;
    }
} else {
  echo json_encode(2);
}


?>
