<?php
/**
 * Created by PhpStorm.
 * User: nasss
 * Date: 12/18/2017
 * Time: 5:31 PM
 */
require ('Show_Items_System/db.php');
$name = $_POST['Name'];
$price = $_POST['Price'];
$img = $_POST['Img'];
echo "$name";
print "$price";
print "$img";

$sql = "INSERT INTO items (name, price, img)
            VALUES ('$name', '$price', '$img')";

if (mysqli_query($conn, $sql)) {
    echo "New item added  successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
