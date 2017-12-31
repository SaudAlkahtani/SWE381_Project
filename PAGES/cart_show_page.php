<?php
session_start();
if($_SESSION['logged_in'] != 1){
     header("location: HomeDStest.php");
}
    ?>
<!DOCTYPE html>
<html >
<title>Profile page</title>
<head>

    <script src="../https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Styles_files/show_item_detail_styles.css">
    <link rel="stylesheet" href="../Styles_files/show_item_styles.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="../https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="../Styles_files/profile_styles.css" rel="stylesheet">

</head>


<body>

<div id="includedContent1">
    <?php
    include_once ('../page_parts/top_Side[bars].php');
    ?>
</div>

<br><br><br><br><br><br><br><br><br>
<strong class="w3-center" style="text-align: center">
    <div class=panel-heading' style="color: #3b3b3b; bold">  <strong><h1 >User Information</h1></div></strong><hr>

<h3 style="color: #676a6c"><span  >First Name :<?php echo( $_SESSION['first_name']."<br>Last Name :". $_SESSION['last_name']) ?></h3>
<h2  style="color: #676a6c"><span class='glyphicon glyphicon-envelope one' style='width:50px;'></span> Email: <?php echo( $_SESSION['email']) ?></h2>
</div>

<br><br>
<div class="w3-border ">
    <?php
    include  ('../page_parts/Show_Items_System/showUserItems.php');
    ?>
</div>

<div id="includedContent2">
    <?php
    include_once ('../page_parts/footer.html');
    ?>
</div>




</body>
</html>
