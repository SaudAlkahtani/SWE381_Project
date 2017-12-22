<?php
session_start();
require 'db.php';
$conn = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$sql = "INSERT INTO items(img, name, discription, price,seller) VALUES('".$_POST["img"]."', '".$_POST["name"]."','".$_POST["discription"]."','".$_POST["price"]."','".$_SESSION["email"]."')";
if(mysqli_query($conn, $sql))
{
    echo 'Data Inserted';
}
?>