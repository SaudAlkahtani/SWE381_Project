<!DOCTYPE html>
<html >
<title>cart_show_page</title>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="show_item_detail_styles.css">
    <link rel="stylesheet" href="show_item_styles.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="cart_Styles.css" rel="stylesheet">


</head>


<body>

<div id="includedContent1">
    <?php
    include_once ('topAndSideBars.html');
    ?>
</div>

<br><br><br><br><br><br><br><br><br>
<div class="w3-border ">
    <?php
    include  ('Show_Items_System/show_cart.php');
    ?>
</div>

<div id="includedContent2">
    <?php
    include_once ('footer.html');
    ?>
</div>




</body>
</html>