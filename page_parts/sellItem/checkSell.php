<?php
/**
 * Created by PhpStorm.
 * User: nasss
 * Date: 12/18/2017
 * Time: 5:31 PM
 */
require('../Show_Items_System/db.php');
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        //Insert image content into database
        //$insert = $db->query("INSERT into items (image, created) VALUES ('$imgContent', '$dataTime')");
        $sql = "INSERT INTO items img)
            VALUES ('$imgContent')";

        if(mysqli_query($conn,$sql)){
            echo "item added Successfully!.";
        }else{
            echo "item was not added! ";
        }
    }else{
        echo "Please select an image file to upload.";
    }


//$name = $_POST['Name'];
//$price = $_POST['Price'];
//$img = $_POST['Img'];
//echo "$name";
//print "$price";
//echo "$img";
//
//$sql = "INSERT INTO items (name, price, img)
//            VALUES ('$name', '$price', '$img')";
//
//if (mysqli_query($conn, $sql)) {
//    echo "New item added  successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
mysqli_close($conn);