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
    echo("<br><br>");
    echo  (" <div class='container'> <div class='row'>");
    while($row = $result->fetch_assoc()) {
        if ($row['type'] == 'Car') {
            echo("<div class='col-md-3'>
        <div class='ibox'>
            <div class='ibox-content product-box'>
            <div class='product-imitation'> <img src='data:image/jpeg;base64," . base64_encode($row['img']) . "' height='200px' width='200px'/> </div>
                <div class='product-desc'>
                    <span class='product-price'> $" . $row["price"] . "</span>
                    <small class='text-muted'>" . $row['type'] . " </small>
                    <a href='../../swe381Project/PAGES/product_full_detail.php?id=" . $row['id'] . "' class='product-name'>" . $row['name'] . "</a>
                    <div class='small m-t-xs'>Description</div>
                    " . $row['description'] . "   
                    <div class='m-t text-righ'>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>");
        }
    }
        echo "</div> </div>";
} else {
    echo "0 results";
}
$conn->close();
?>