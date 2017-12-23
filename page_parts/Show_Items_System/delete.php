<?php
require 'db.php';
$conn = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$sql = "DELETE FROM items WHERE id = '".$_POST["id"]."'";
if(mysqli_query($conn, $sql))
{
    echo 'Data Deleted';
}
?>