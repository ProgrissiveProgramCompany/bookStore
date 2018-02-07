<?php
include "connection.php";
$isbn = $_GET['isbn'];
$query = "select * from books WHERE isbn ='$isbn'";
$result = $conn->query($query);
$display;
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $src="../covers/".$row['category']."/".$row['pic'];
        $title = $row['title'];
        $author = $row['author'];
        $price = $row['price'];

        $desc = $row['descrption'];
        $display=
         "
        <div class='container'>
    <div class='row row-margin-bottom offset-1'>


        <div class='col-md-10 no-padding lib-item ' data-category='view'>
            <div class='lib-panel'>
                <div class='row box-shadow'>
                    <div class='col-md-6'>
                        <img class='lib-img-show' src='$src' style='height: 90%;'>
                    </div>
                    <div class='col-md-6'>
                        <div class='lib-row lib-header'>
                          <h2><strong id='name'>$title</strong></h2>
                        </div>
                        <hr>
                        <h4 class='offset-1' id='author'>Author : $author</h4>
                        <hr>
                        <h4 class='offset-1' id='price'>price : $price</h4>
                        <hr>
                        <h4 class='offset-1' id='description-title'>Description :</h4>
                        <br>
                        <p class='offset-1' id='description'>$desc</p>
                        <hr>
                        <h4 class='offset-1' id='rate'>Rate : &#9733; &#9733; &#9733; &#9733; &#9734;</h4>
                        <hr>


                    </div>
                    <button data-toggle='modal' data-target='#myModal2' onclick='addToCart($isbn)' class='btn btn-primary col-4' style='margin-top: 1px;margin-bottom: 15px;margin-left: 20%'>
                        Add to Cart
                    </button>

                </div>


            </div>

        </div>

        <div class='col-md-1'></div>

    </div>
</div>
";

echo $display;
    }
}
else{

}