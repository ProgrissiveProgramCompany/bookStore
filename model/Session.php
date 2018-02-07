<?php
require "connection.php";
if(isset($_SESSION["id"])){
    echo json_encode("true");
}
else{
    echo json_encode("false");
}

?>