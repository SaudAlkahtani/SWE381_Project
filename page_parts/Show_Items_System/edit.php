<?php
require 'db.php';
$conn = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$id = $_POST["id"];
$text = $_POST["text"];
$column_name = $_POST["column_name"];
$sql = "UPDATE items SET ".$column_name."='".$text."' WHERE id='".$id."'";
if(mysqli_query($conn, $sql))
{
    echo 'Data Updated';
}
?>