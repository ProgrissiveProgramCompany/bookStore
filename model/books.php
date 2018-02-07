<?php
include "connection.php";
$category = $_GET['category'];
switch ($category){
    case "new": $query = "select * from books ORDER BY isbn DESC ";
        break;
    case "price1":    $query = "select * from books where price >0 and price < 20";
    break;

    case "price2":    $query = "select * from books where price >19 and price < 50";
    break;

    case "price3":    $query = "select * from books where price >50 and price < 80";
    break;

    case "price4":    $query = "select * from books where price >80 and price < 100";
    break;

    default:    $query = "select * from books where category='$category'";

}

$books = array();
$bookCounter =0;
$result = $conn->query($query);
$r ="<div class='row'>";
$counter=0;
if($result->num_rows>0){

    while($row = $result->fetch_assoc()) {

        $cat = $row['category'];
        $pic = $row['pic'];
        $image ="../covers/".$cat."/".$pic;

        $title = $row['title'];
        $desc = $row['descrption'];
        $price = $row['price'];
        $isbn = $row['isbn'];


        $r = $r. "
                <div class='col-lg-4'>
                    <div class='card mb-r wow fadeIn' data-wow-delay='0.2s'>
                        
                        <img class='img-fluid' src='$image' alt='Card image cap' style='width: 600px;height: 300px'>
                        
                        <div class='card-body'>
                        
                        <h5 class='font-blod'>
                            
                            <strong>$title</strong>
                            <span class='badge badge-info'>New</span>
                        </h5>
                        <hr>
                        <h4>
                            <strong>$price$</strong>
                        </h4>
                        <center>
                        <a onclick='Book($isbn)'  class='btn btn-info btn-sm'>View Book </a>
                        </center>
                        </div>
                    </div>
                </div>
            ";

        /*

         <!--Title-->

                                        <!--Text-->
                                        <p class="card-text mt-4">Some quick example text to build on the card title.
                                        </p>
                                        <a href="#" class="btn btn-info btn-sm">Buy now </a>
                                    </div>
                                </div>
                                <!--/.Card-->
                            </div>



                            </div>
                        </div>
                        <!--/.First row-->
                        <br>
                        <hr class="extra-margins">
                        <!--Second row-->
                        <div class="row">
                            <!--First columnn-->
                            <div class="col-lg-4">
                                <!--Card-->
                                <div class="card mb-r wow fadeIn" data-wow-delay="0.2s">
                                    <!--Card image-->
                                    <img class="img-fluid"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg"
                                         alt="Card image cap">
                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <h5 class="font-bold">
                                            <strong>Product title</strong>
                                            <span class="badge badge-danger">Sold out</span>
                                        </h5>
                                        <hr>
                                        <h4>
                                            <strong>1229$</strong>
                                        </h4>
                                        <!--Text-->
                                        <p class="card-text mt-4">Some quick example text to build on the card title.
                                        </p>
                                        <a href="#" class="btn btn-info btn-sm">Buy now </a>
                                    </div>
                                </div>
                                <!--/.Card-->
                            </div>
                            <!--First columnn-->

         */

    }
    echo $r;

}else{
}
?>
