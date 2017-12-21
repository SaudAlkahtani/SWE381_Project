
<?php



require '../../DataBases_DS/DSDB.php';

$sql ='SELECT * FROM items ';
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
$counter = 0;

    echo ("   
   <link rel='stylesheet' href='../../Styles_files/cart_Styles.css'>
<div class='container w3-center' style='text-align: center >
    <div class='wrapper wrapper-content animated fadeInRight'>
        <div class='row'>
            <div class='col-md-9' '>
                <div class='ibox'>
                    <div class='ibox-content'>
                        ");

include_once 'show_user_items.php';

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
$mysqli->close();

?>
