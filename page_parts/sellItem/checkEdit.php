<?php
/**
 * Created by PhpStorm.
 * User: nasss
 * Date: 12/23/2017
 * Time: 6:33 PM
 */

/**
 * Created by PhpStorm.
 * User: nasss
 * Date: 12/18/2017
 * Time: 5:31 PM
 */
require('../Show_Items_System/db.php');
session_start();
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["upload"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));


        $name = addslashes($_POST['Name']);
        $price = $_POST['Price'];
        $type = $_POST['types'];
        $description = addslashes($_POST['description']);
        $seller=$_SESSION['email'];
        $id = $_SESSION['editId'];
        //Insert image content into database
//        UPDATE Supplier
//   SET City = 'Oslo', Phone = '(0)1-953530', Fax = '(0)1-953555'
// WHERE Id = 15
//
        $sql= "UPDATE items SET name ='".$name."', type='".$type."', price =  '".$price."', img = '".$imgContent."', description = '".$description."', seller='".$seller."' WHERE   Id = '".$id."' ";
        //$insert = $db->query("INSERT into items (image, created) VALUES ('$imgContent', '$dataTime')");
       // $sql = "INSERT INTO items (name, type, price, img , description,seller)
         //   VALUES ('$name','$type', '$price', '$imgContent', '$description' , '$seller')";

        if(mysqli_query($conn,$sql)){
            echo "item edited Successfully!. \n";
            echo " you'll be redirected to your items list in 3 Seconds!";
            header( "refresh:3;url=../../PAGES/cart_show_page.php" );


        }else{
            echo "item was not edited ";
        }
    }else{
        echo "Please select an image file to upload.";
    }
}
else {
    echo "didnt upload file or item!";
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
