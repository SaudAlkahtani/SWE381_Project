<?php
/**
 * Created by PhpStorm.
 * User: YYUU6699
 * Date: 12/17/2017 AD
 * Time: 9:33 PM
 */
require 'db.php';

$sql ='SELECT * FROM items ';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo  (" <div class='container'> <div class='row'>");
    while($row = $result->fetch_assoc()) {
      echo ("<div class='col-md-3'>
        <div class='ibox'>
            <div class='ibox-content product-box'>
            <div class='product-imitation'> <img src='".$row['img']."'alt='no img!'/> </div>
                <div class='product-desc'>
                    <span class='product-price'> $" . $row["price"]. "</span>
                    <small class='text-muted'>the type of the item </small>
                    <a href='#' class='product-name'> name :". $row['name']."</a>

                    <div class='small m-t-xs'>Discription</div>
                    <div class='m-t text-righ'>

                        <a href='#' class='btn btn-xs btn-outline btn-primary'>add to Cart <i class='fa fa-long-arrow-right'></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>");

    }
    echo "</div> </div>";
} else {
    echo "0 results";
}
$conn->close();
?>