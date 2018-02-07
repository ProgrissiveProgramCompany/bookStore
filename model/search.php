<?php
include "connection.php";
$search = $_GET['search'];


$query = "select * from books where title LIKE '$search%' or author LIKE '$search%'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $img = "../covers/" . $row['category'] . "/" . $row['pic'];
        $isbn = $row['isbn'];
        echo "    
        
        <div style='height: 55px;' onclick='Book($isbn)' id='10'>
            <div class='search-item'>
                <img src='" . $img . "' width='50' height='50' />
                    <strong>" . $row['title'] . "</strong>
                       <!-- author name
                        <p style='margin-left: 40%;' >".$row['author']."</p>
                        -->
                    
            </div>
        </div>
        
        ";

    }
} else {
    echo "<li>No match found!</li>";
}

/*
 * $keywords_arr = explode(",", mysqli_real_escape_string($conn, $search));
$like = "";
foreach ($keywords_arr as $key) {
    $key = trim($key);
    if ($key != "") $like .= " `title` like '%" . $key . "%' or `author` like '%".$key."%'";
}
$like = substr($like, 0, -3);

//$sql = "select distinct * from `books` where ".$like." limit 20";
$sql = "SELECT DISTINCT * FROM `books` WHERE " . $like . " LIMIT 20";

 */


?>

