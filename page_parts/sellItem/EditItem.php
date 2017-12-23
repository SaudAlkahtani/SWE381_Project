<?php
session_start();
require('../Show_Items_System/db.php');

$sql ="SELECT * FROM items ";
$result = $conn->query($sql);
global $name, $price, $description;
$name='testName';

if ($result->num_rows > 0) {
// output data of each row
    $row = $result->fetch_assoc();

    while ($row = $result->fetch_assoc()) {

        if ($row["id"] == $_GET['id']) {


            $type = $row['type'];
            $name = $row['name'];
            $price = $row['price'];
            $description = $row['description'];
            $img = $row['img'];
            $id = $_GET['id'];
            $_SESSION['editId'] = $id;
            echo $_SESSION['editId'];

        }
    }
}


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name= "description" content= "takes the information of the item">
    <title>sell</title>
    <style>
        button.accordion {
            background-color: tomato;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 180px;
            border: none;
            text-align: center;
            outline: none;
            font-size: 30px;
            transition: 0.4s;
        }
        .sell{
            color:#000000;
            font-size:20px;
            text-align:center;
            font-size:20px;
            padding:20px 0;
            font-family: "Roboto";
        }
        .footer {
            background: black;
            color: white;
            font-size:20px;
            text-align:center;
            font-size:20px;
            padding:20px 0;
            font-family: "Roboto";
        }
        .form {
            background: black;
            color: white;
            font-size:20px;
            text-align:center;
            font-size:20px;
            padding:20px 0;
            font-family: "Roboto";
            margin-right: 25%;
            margin-left: 25%;
        }
    </style>
    <script>
        function editTextArea() {
            var textArea = document.getElementById("textarea");
            textArea.innerHTML = "<?php echo $description ;?>";
        }
        window.addEventListener("load",editTextArea,false);
    </script>
</head>
<body>
<div class="sell">
    <img src="https://image.ibb.co/g7Hy5w/Diversty_Shop_Home_Page_LOGO.png" height="300px" width="370px" alt ="DiverstyShop"/>
    <br>
    <br>
    <br>
    <form class="form" action="checkEdit.php" target="_blank" method="post" enctype="multipart/form-data">
            <span>reselect the type of item:
            <select name="types" value="<?php echo "$type" ?>">
                <option value="Car"> Car</option>
                <option value="Furniture"> Furniture</option>
                <option value="Animals"> Animals</option>
                <option value="Plants"> Plants</option>

            </select>
            </span>
        <br>
        <p><input type="text" placeholder="name" value="<?php echo "$name";  ?>" name="Name" required ></p>
        <p><input type="text" placeholder="Price" name="Price" required value="<?php echo "$price" ?>" ></p>

        <h5>re enter the  description for the product: </h5>
        <textarea type="text" placeholder="description" rows="10" cols="60" name="description" value="<?php echo "$description" ?>" id="textarea"> </textarea>

        <p>upload an image for the product:
            <input type= "file" name="image" accept="image">
        <p>Old image:</p>
            <?php echo "
            <img src='data:image/jpeg;base64," . base64_encode( $img )."' height='200px' width='200px'/>
"
    ?>
        </p>

        <button type="submit" class="accordion" name="upload">Send</button>
    </form>
</div>
<div class = "footer">
    Copyright &copy; 2017 DiverstyShop.com
</div>

</body>

</html>