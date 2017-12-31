<?php



require 'db.php';



//star priting items

$sql ='SELECT * FROM items ';
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    echo ("

<div class='container w3-center' style='text-align: center' >
    <div class='wrapper wrapper-content animated fadeInRight' >
        <div class='row'>
            <div class='col-md-9' '>
                <div class='ibox'>
                    <div class='ibox-content'>
                        ");

    $user_email = $_SESSION['email'];
    while($row = $result->fetch_assoc()) {
        if( $user_email == $row['seller']) {

            echo("<div class='ibox-content w3-border w3-center'>
                            <div class='table-responsive'>
                                <table class='table shoping-cart-table'>
                                    <tbody>
                                    <tr>
                                        <td width='90' height='90'>
                                            <div>
                                            <img width='90' height='90' class='cart-product-imitation' src='data:image/jpeg;base64," . base64_encode($row['img']) . "' />
                                            </div>
                                        </td>
                                        <td class='desc'>
                                            <h3>
                                                <a href='../../swe381Project/PAGES/product_full_detail.php?id=".$row['id']."' class='text-navy'>
                                                    " . $row['name'] . "
                                                </a>
                                            </h3>
                                            <p class='small'>
                                                 " . $row['description'] . "
                                            </p>

                                            <div class='m-t-sm'>
                                               
                                                <a href='../../swe381Project/page_parts/Show_Items_System/delete.php?id=" . $row['id'] . "' class='text-muted'><i class='fa fa-trash'></i> Remove item</a>
                                                <a style='margin-left: 3px' href='../../swe381Project/page_parts/sellitem/EditItem.php?id=" . $row['id'] . "'  class='text-muted'> <i class='fa fa-pencil-square' aria-hidden='true'>Edit item</i></a>


                                            </div>
                                        </td>


                                        <td width='65'>
                                            
                                        </td>
                                        <td>
                                            <h4>
                                                $" . $row["price"] . "
                                            </h4>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        ");
        }

    }
    echo ("
                    </div>
                </div>

            </div>
        </div>
        

            <div class='ibox'>

            </div>
        </div>
    </div>
</div> <br>
<br>
<div class=' container w3-center'><a href='../../../swe381Project/page_parts/sellItem/sell.php ' style='text-align: center;' class='text-center w3-center'><i class='fa fa-trash'></i> Add item</a></div>


<br><br>
");

}else {
    echo "0 results";

}





$conn->close();

