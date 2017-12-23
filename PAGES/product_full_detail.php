<?php
session_start();
require('../page_parts/Show_Items_System/db.php')


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!-- 
    	The codes are free, but we require linking to our web site.
    	Why to Link?
    	A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google! 
    	Where to Put the Link?
    	home, about, credits... or in a good page that you want
    	THANK YOU MY FRIEND!
    -->
    <?php



    $sql ="SELECT * FROM items ";
    $result = $conn->query($sql);
    global $SellerName;
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
       global $SellerName;


            while($row = $result->fetch_assoc()) {
                //$row['seller'];
                if ($row["id"] == $_GET['id']) {
                    require('../page_parts/login_System/db.php');
                    $sql2 = "SELECT * FROM users";
                    $aResults = mysqli_query($mysqli,$sql2);

                    while( $accounts = $aResults->fetch_assoc()){

                        if($accounts['email']==$row['seller']) {

                            global $SellerName;

                            $SellerName = $accounts['first_name'] . " " . $accounts['last_name'];

                        }
                    }

                    echo "
        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'>
<div class='col-sm-12 col-md-12 col-lg-12'>
    		<!-- product -->
			<div class='product-content product-wrap clearfix product-deatil'>
				<div class='row'>
						<div class='col-md-5 col-sm-12 col-xs-12 '>
							<div class='product-image'> 

										<img src='data:image/jpeg;base64," . base64_encode( $row['img'] )."' height='200px' width='200px'/>

							</div>
						</div>
						<div class='col-md-7 col-sm-12 col-xs-12'>
					
						<h2 class='name'>
							".$row['name']."
 							<br>
                            <br>
							<small>Product by ".$SellerName."</small>

						</h2>
						<br><hr>
						<h3 class='price-container'>
							".$row['price']."
							<!--<small>*includes tax</small>-->
						</h3>
						<div class='certified'>
							<!--<ul>-->
								<!--<li><a href='javascript:void(0);'>Delivery time<span>7 Working Days</span></a></li>-->
								<!--<li><a href='javascript:void(0);'>Certified<span>Quality Assured</span></a></li>-->
							<!--</ul>-->
						
						
						<!--</div>>
						<div class='description description-tabs'>
							<ul id='myTab' class='nav nav-pills'>
								<li class='active'><a href='#more-information' data-toggle='tab' class='no-margin'>Product Description </a></li>
								<!--<li class=''><a href='#specifications' data-toggle='tab'>Specifications</a></li>-->
								<!--<li class=''><a href='#reviews' data-toggle='tab'>Reviews</a></li>-->
							<!--</ul>
							<!--<div id='myTabContent' class='tab-content'>
							<!--	<div class='tab-pane fade active in' id='more-information'>
								<!--	<br>

								<!--	<p>".$row['description']."</p>
								<!--</div>
								

						</div>-->
						<?php
						?>
						
						
						<br><hr>";
                        if($_SESSION['logged_in']==1){
                            echo "<p><h3>Description: </h3>".$row['description']."</p>
                                  <br><hr><h3> Contact Seller: </h3> <p>".$row['seller']."</p>";
                        }else{
                            echo "<p>You have to be logged in to see description and Contact!</p>";
                        }
                        echo "
						<!--<div class='row'>
							<div class='col-sm-12 col-md-6 col-lg-6'>
									<a href='javascript:void(0);' class='btn btn-success btn-lg'>Contact Seller</a>
							</div>
							<div class='col-sm-12 col-md-6 col-lg-6'>

							</div>-->
							
						</div>
					</div>
				</div>
			</div>
			<!-- end product -->
		</div>
</div>

<script src='http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script type='text/javascript'>
	
</script>
            
            ";
                }
            }

}
    ?>
    <title>Product Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="../Styles_files/show_item_detail_styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>

</body>
</html>

<?php
$conn->close();
