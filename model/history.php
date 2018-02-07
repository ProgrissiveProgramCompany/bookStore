<?php
require "connection.php";
$userid = $_SESSION['id'];
$sql = "select Cart.userid , Books.title,BOOKS.isbn ,price , Cart.quantity , SUM(quantity*price) as finalPrice
        ,count(quantity) as totalCount, quantity*price as totalPrice from cart NATURAL JOIN books
        where Cart.userid='$userid' and bought = false
        GROUP BY BOOKS.isbn";
$books = array();
$bookCounter =0;
$display = "    <thead>
                                <tr>
                                    <th ><strong>Title</strong></th>
                                    <th><strong>Quantity</strong></th>
                                    <th><strong>Price</strong></th>
                                    <th><strong>Price(summation)</strong></th>

                                </tr>
";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    $finalPrice;
    $totalCount;
    while ($row = $result->fetch_assoc()) {

        $title = $row['title'];

        $count = $row['quantity'];
        $total =$row['totalPrice'];
        $isbn = $row['isbn'];
        $price = $row['price'];
        $finalPrice = $row['finalPrice'];
        $totalCount = $row['totalCount'];
        $display = $display."
                    <tr>
                        <th>$title</th>
                        <th>$count</th>
                        <th>$price</th>
                        <th>$total$</th>
                    </tr>
        ";

        $display = $display."
        ";

    }




    $display = $display."";
    echo $display;
}
else{
    echo "    <br><br>
            <center><h4><strong>
            you did not buy any thing yet
           </strong></h4></center>";
}

$conn->close();
?>