<?php
/* Displays user information and some useful messages */
session_start();
//define($_SESSION['logged_in'],"loging_constant");
// Check if user is logged in using the session variable



//VVVV just to test the profile button [yyuu6699]

//until here [yyuu6699]


$message;
if ( $_SESSION['logged_in'] != 1 ) {
    $message= "You must log in before viewing your profile page!";
    //header("location: error.php");
}
else {
    // Makes it easier to read
   // $first_name = $_SESSION['first_name'];
    //$last_name = $_SESSION['last_name'];
   // $email = $_SESSION['email'];
   // $active = $_SESSION['active'];

    $message="you are logged in!";
}
?>

<!DOCTYPE html>
<html >
<title>Home_DS_page</title>
<head>

    <script src="../https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Styles_files/show_item_detail_styles.css">
    <link rel="stylesheet" href="../Styles_files/show_item_styles.css">

</head>


<body>

<div >
    <?php
    include_once ('../page_parts/top_Side[bars].php');
    ?>
</div>


<div id="includedContent3" style="height: 500px ;width: 100%">
    <?php
    include_once ('../page_parts/slider_show.html')
    ?>
  
</div>
<br><br><br><br><br><br>
<div id="includeContent4"  style="background: white">

    <?php
    include  ('../page_parts/Show_Items_System/showItmes.php');
    ?>

</div>



<div id="includedContent2">
    <?php
    include_once ('../page_parts/footer.html');
    ?>
</div>







</body>

</html>

