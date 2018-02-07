<?php

require "connection.php";


$userName = $_GET['userName'];
$password = $_GET['password'];
$picture = $_GET['pic'];



$query = "insert into users(type,username,password,picture) values(1,'$userName','$password','$picture')";
if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
    $query = "SELECT * FROM users WHERE username ='$userName' and password='$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['id'] = $row['id'];
            echo $_SESSION['id'];
            break;
        }
    }
    echo "Error deleting record: " . $conn->error;

} else {
    echo "Error deleting record: " . $conn->error;
}

?>