<?php
include("admin/includes/dbh.inc.php");
								
$sql = " SELECT * FROM products ";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo '
        <div class="col-md-5 col-md-push-2">
            <div id="product-main-img">
                <div class="product-preview">
                    <img src="product_images/'.$row['product_image'].'" alt="">
                </div>
            </div>
        </div>';
    }
}

?>