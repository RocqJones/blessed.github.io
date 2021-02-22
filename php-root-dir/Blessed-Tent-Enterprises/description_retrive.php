<?php 
include("admin/includes/dbh.inc.php");

$result = mysqli_query($conn, "SELECT * FROM products");

if (mysqli_num_rows($result) > 0) {
    $i=0;
    while($row = mysqli_fetch_array($result)) {
        echo $row["product_description"];
        $i++;
    }
} else{
    echo "No result found";
}