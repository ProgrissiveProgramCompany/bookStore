<?php
require "connection.php";
$id = $_SESSION['id'];

$query = "select SUM(price*quantity) AS totalPrice from cart NATURAL JOIN books";

$result=$conn->query($query);
if ($result->num_rows > 0) {
   $content="";
    while ($row = $result->fetch_assoc()) {

        $content = $content.$row['totalPrice'];

    }
        $num = rand(1,50);
    echo "
            <div class='text-dark'>
               <center>
                <h4>
                    Belt Number is : <strong>'$num'</strong> <br>
                    and total price is <strong>$content</strong>
                 </h4>
                 </center>
            </div>
    
    ";
}



        ?>