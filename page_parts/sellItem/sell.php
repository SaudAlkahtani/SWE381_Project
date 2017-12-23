<?php
require('../Show_Items_System/db.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name= "descriptio n" content= "takes the information of the item">
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
</head>
<body>
    <div class="sell">
        <img src="https://image.ibb.co/g7Hy5w/Diversty_Shop_Home_Page_LOGO.png" height="300px" width="370px" alt ="DiverstyShop"/>
        <br>
        <br>
        <br>
        <form class="form" action="checkSell.php" target="_blank" method="post" enctype="multipart/form-data">
            <span>select the type of item:
            <select name="types">
                <option value="Car"> Car</option>
                <option value="Furniture"> Furniture</option>
                <option value="Animals"> Animals</option>
                <option value="Plants"> Plants</option>

            </select>
            </span>
            <br>
        <p><input type="text" placeholder="Name" name="Name" required></p>
        <p><input type="text" placeholder="Price" name="Price" required></p>
        <p><input type="text" placeholder="Amount" name="Amount" required></p>
        <h5>Enter a description for the product: </h5>
        <textarea placeholder="description" rows="10" cols="60" name="description"></textarea>

            <p>upload an image for the product:
                <input type= "file" name="image" accept="image">
            </p>

        <button type="submit" class="accordion" name="upload">Send</button>
    </form>
    </div>
<div class = "footer">
    Copyright &copy; 2017 DiverstyShop.com
</div>
</body>
</html>