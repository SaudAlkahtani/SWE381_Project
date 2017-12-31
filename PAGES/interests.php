s<?php


session_start();
require '.././page_parts/login_System/db.php';
if($_SESSION['logged_in'] != 1){
    header("location: HomeDStest.php");
}
?>
<!DOCTYPE html>
<html >
<title>Interest</title>
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
<div class="w3-border ">
    <?php
    include  ('../page_parts/Show_Items_System/show_interests.php');

    $sql ='SELECT * FROM users ';

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if($_SESSION['email'] == $row['email']){
                $sql = "UPDATE `users` SET `history` = NULL WHERE `users`.`id`=".$row['id'];
                mysqli_query($mysqli, $sql);
                $_SESSION['history']=NULL;
                break;
            }
        }
    }
    ?>
</div>

<div id="includedContent2">
    <?php
    include_once ('../page_parts/footer.html');
    ?>
</div>




</body>
</html>