<?php
session_start();
require('../page_parts/Show_Items_System/db.php')


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Product Information</title>
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
        <div >
            <?php
            include_once ('../page_parts/top_Side[bars].php');
            ?>
        </div>

        <br><br><br>
        <div id="includedContent3" style="height: 500px ;width: 100%">
            <?php
            include_once ('../page_parts/slider_show.html')
            ?>

        </div>
        <br><br><br><br><br><br><br><br><br>


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
<title>Product Information</title>
        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'>
<div class='col-sm-12 col-md-12 col-lg-12'>
    		<!-- product -->
			<div class='product-content product-wrap clearfix product-deatil'>
				<div class='row'>
						<div class='col-md-5 col-sm-12 col-xs-12 ' style='margin-left: : 30%' >
							<div class='product-image' > 

										<img src='data:image/jpeg;base64," . base64_encode( $row['img'] )."' height='200px' width='200px' style='margin-left: : 30%' />

							</div>
						</div>
						<div class='col-md-7 col-sm-12 col-xs-12'>
					
						<h2 class='name'>
							".$row['name']."
 							<br>
 							<br>
							<small>Product by ".$SellerName."</small>

						</h2>
						
						<hr>
						<h3 class='price-container'>
						Price:
							$".$row['price']."
							<!--<small>*includes tax</small>-->
						</h3>
						<br><br>
						<h3>Description</h3>
						<div class='certified'>
						
							".$row['description']."
							
								
                            
						</div>
						<?php
						?>
						
						
						<br><hr>
						<h3>Contact info</h3>
						";

                    if($_SESSION['logged_in']==1){
                        echo "
                                  <p>".$row['seller']."</p>";
                    }else{
                        echo "<p style='color:red'>You have to be logged in to see contact information!</p>";
                    }
                    echo "
						<br><br>
							
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
    <div id="includedContent2">
        <?php
        include_once ('../page_parts/footer.html');
        ?>
    </div>
    </body>
    </html>

<?php



$conn->close();