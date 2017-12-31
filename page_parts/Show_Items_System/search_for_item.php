<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Search</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    </html>
<?php
$conn =mysqli_connect("localhost", "root", "","dbitems");

/*
    localhost - it's location of the mysql server, usually localhost
    root - your username
    third is your password

    if connection fails it will stop loading the page and display an error
*/

mysqli_select_db($conn,"dbitems") or die(mysqli_error());
/* tutorial_search is the name of database we've created */



?>
<?php
$query = $_GET['query'];
// gets value sent over search form

$min_length = 3;
// you can set minimum length of the query if you want

if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

    $query = htmlspecialchars($query);
    // changes characters used in html to their equivalents, for example: < to &gt;

    $query = mysqli_real_escape_string($conn,$query);
    // makes sure nobody uses SQL injection

    $raw_results = mysqli_query($conn,"SELECT * FROM items
            WHERE (`name` LIKE '%".$query."%') OR (`type` LIKE '%".$query."%')") or die(mysqli_error($conn));

    // * means that it selects all fields, you can also write: `id`, `title`, `text`
    // articles is the name of our table

    // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
    // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
    // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

    if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
        echo("<br><br>");
        echo  (" <div class='container'> <div class='row'>");
        while($results = mysqli_fetch_array($raw_results)){

            echo ("<div class='col-md-3'>
        <div class='ibox'>
            <div class='ibox-content product-box'>
            <div class='product-imitation'> <img src='data:image/jpeg;base64," . base64_encode( $results['img'] )."' height='200px' width='200px'/> </div>
                <div class='product-desc'>
                    <span class='product-price'> $" . $results["price"]. "</span>
                    <small class='text-muted'>". $results['type']."  </small>
                    <a href='../../swe381Project/PAGES/product_full_detail.php?id=".$results['id']."' class='product-name'>". $results['name']."</a>
                    ".$results['description']."
                    <div class='m-t text-righ'>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>");
        }
        echo "</div> </div>";
        // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop


        // posts results gotten from database(title and text) you can also show id ($results['id'])


    }
    else{ // if there is no matching rows do following

       echo "<br> <br> <br>";

        echo "<p style='text-align: center'> No results </p>";
        $TheWord = $query;

        if($_SESSION['logged_in'] == 1){
            $sql ='SELECT * FROM users ';
            $email = $_SESSION['email'];
            $fn = $_SESSION['first_name'];

            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row //
                while($row = $result->fetch_assoc()) {
                    if($_SESSION['email'] == $row['email']){
                        $sql = "UPDATE users SET history ='$TheWord' WHERE email = '$email'";
                        mysqli_query($mysqli, $sql);
                    }
                }
            }
        }
    }

}
else{ // if query length is less than minimu


}
?>