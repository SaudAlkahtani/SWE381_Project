<?php
/**
 * Created by PhpStorm.
 * User: YYUU6699
 * Date: 12/17/2017 AD
 * Time: 9:36 PM
 */
require 'db.php';
$id_given = $_SESSION['DID'];// make it correct (***********)

$sql ="SELECT * FROM items ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    while($row = $result->fetch_assoc()) {


        if($row["id"]== $id_given) {

            /** @var TYPE_NAME $row */
            echo("<div class='col-md-9'>
        <section class='panel'>
              <div class='panel-body'>
                  <div class='col-md-6'>
                      <div class='pro-img-details'>
                          <img src='" . $row["img"] . "'alt='no img!'/>
              </div>
              
          </div>
     </div>
      <div class='col-md-6'>
              <h4 class=\'pro-d-title'>
                  <a href=''#' class=''>" . $row["name"] . "</a>
              </h4>
              <p>
                 Discription
              </p>
              <div class='product_meta'>
                  <span class='posted_in'> <strong>Category: ..... </strong> 
              </div>
              <div class='m-bot15'> <strong>Price : </strong>  <span class='pro-price'> $" . $row["price"] . "</span></div>
              <div class='form-group'>
                  <label>Quantity </label>
                  <input type='quantiy' placeholder='1' class='form-control quantity'>
              </div>
              <p>
                  <button class='btn btn-round btn-danger' type='button'><i class='fa fa-shopping-cart'></i> Add to Cart</button>
              </p>
          </div>
  </section>

  </div>");}

    }

} else {
    echo "0 results";
}
$conn->close();
?>