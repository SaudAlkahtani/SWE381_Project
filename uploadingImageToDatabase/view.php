<?php
if(!empty($_GET['id'])){
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'dbitems';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //Check connection
    if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
    }

    //Get image data from database
    $result = $db->query("SELECT img FROM items WHERE id = {$_GET['id']}");

    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();

        //Render image
       // header("Content-type: image/jpg");
       // echo 'hello world';
        echo '<img src="data:image/jpeg;base64,' . base64_encode( $imgData['img'] ) . '" />';

        //echo $imgData['img'];
    }else{
        echo 'Image not found...';
    }
}
