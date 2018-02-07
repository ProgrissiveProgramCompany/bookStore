<?php
require "connection.php";
$isbn = $_GET['isbn'];

$query = "select * from comments where isbn='$isbn'";

$result = $conn->query($query);

if($result->num_rows>0){

    while($row = $result->fetch_assoc()) {
        $userCommentId = $row['userid'];
        $comment = $row['comment'];
        $sql = "select * from users where id='$userCommentId'";
        $result2 = $conn->query($sql);
        if($result2->num_rows>0){

            while($row = $result2->fetch_assoc()) {

                $pic = "../profiles/".$row['picture'];
                $userName = $row['userName'];


                $content = "
                
                    
                    
                    
                    <div class=\"col-12 \">
            <div class=\"panel panel-white post panel-shadow\">
                <div class=\"post-heading\">
                    <div class=\"pull-left image\">
                        <img src='$pic' class='rounded-circle' style='width: 50px;height: 50px;' alt=\"user profile image\">
                    </div>
                    <div class=\"pull-left meta\">
                        <div class=\"title h5\">
                            <b>'$userName'</b>
                            
                        </div>
                  
                    </div>
                </div> 
                <div class=\"post-description\"> 
                    <p>'$comment'</p>
                    <div class=\"stats\">

                    </div>
                </div>
            </div>
        </div>
        
                    <br>
                    
                    ";
                echo $content;
            }
        }




    }
}
else{
    echo "<center><h4>No Comments for this book</h4></center>
    ";
}
?>