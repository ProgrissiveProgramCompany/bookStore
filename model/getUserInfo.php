<?php
include "connection.php";
$id = $_SESSION['id'];
$query = "select * from users where id='$id'";
$info = array();
$result=$conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $info["name"] = $row['userName'];
        $info["picture"] = $row['picture'];
        echo json_encode($info);
        break;
    }
}
?>