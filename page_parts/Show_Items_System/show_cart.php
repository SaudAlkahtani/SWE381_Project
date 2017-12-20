
<?php



require 'db.php';

$sql ='SELECT * FROM items ';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$counter = 0;
    echo ("

<div class='container w3-center' style='text-align: center >
    <div class='wrapper wrapper-content animated fadeInRight'>
        <div class='row'>
            <div class='col-md-9' '>
                <div class='ibox'>
                    <div class='ibox-content'>
                        ");


    while($row = $result->fetch_assoc()) {
        $counter+=$row["price"];

        echo ("<div class='ibox-content w3-border w3-center'>
                            <div class='table-responsive'>
                                <table class='table shoping-cart-table'>
                                    <tbody>
                                    <tr>
                                        <td width='90' height='90'>
                                            <div>
                                            <img width='90' height='90' class='cart-product-imitation' src='".$row['img']."'alt='no img!'/>
                                            </div>
                                        </td>
                                        <td class='desc'>
                                            <h3>
                                                <a href='#' class='text-navy'>
                                                    ". $row['name']."
                                                </a>
                                            </h3>
                                            <p class='small'>
                                                Discriptin
                                            </p>

                                            <div class='m-t-sm'>
                                                <a href='#' class='text-muted'><i class='fa fa-trash'></i> Remove
                                                    item</a>
                                            </div>
                                        </td>


                                        <td width='65'>
                                            <input type='text' class='form-control' placeholder='1'>
                                        </td>
                                        <td>
                                            <h4>
                                                $" . $row["price"]. "
                                            </h4>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        ");

    }
    echo ("
                        <button class='btn btn-primary pull-right '><i class='fa fa fa-shopping-cart'></i> Checkout
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class='col-md-3 w3-border w3-center ' style='text-align: center'>
                     
            <div class='ibox w3-center'>
                <div class='ibox-title'>
                    <h5>Cart Summary</h5>
                </div>
                <div class='ibox-content'>
                    <span>
                        Total
                    </span>
                    <h2 class='font-bold'>
                        $". $counter ."
                    </h2>

                    <hr>

                    <div class='m-t-sm '>
                        <div class='btn-group w3-border '>
                            <a href='#' class='btn btn-primary btn-sm'><i class='fa fa-shopping-cart'></i> Checkout</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class='ibox'>

            </div>
        </div>
    </div>
</div> <br><br><br>");

}else {
    echo "0 results";
}
$conn->close();

?>
