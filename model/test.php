<?php

include "connection.php";
$sql = "select id,isbn from books,users WHERE id=1 and isbn = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
            echo "isbn is ".$row['isbn'];
            echo "the user   is ".$row['id'];
            echo $_SESSION['id'];
    }
}

?>