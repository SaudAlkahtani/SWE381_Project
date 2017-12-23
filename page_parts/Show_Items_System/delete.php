<?php
require 'db.php';
$conn = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$sql = "DELETE FROM items WHERE id = '".$_GET["id"]."'";
if(mysqli_query($conn, $sql))
{
    echo 'Data Deleted';
    echo " you'll be redirected to your items list in 3 Seconds!";
    header( "refresh:3;url=../../PAGES/cart_show_page.php" );

}
