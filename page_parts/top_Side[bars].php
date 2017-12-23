<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        button.accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;

            text-align: center;

            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }


        .item{
            height: 50%;
            width: 100%;
        }
        .container{
            height: 50%;
            width: 100%;

        }
        #myCarousel{
            height: 50%;
            width: 100%;
        }
        button.accordion.active, button.accordion:hover {
            background-color: #ccc;
            color:black;
            font-size: 20px;
        }


        <?php
        require '../DataBases_DS/db.php';
        $isThereNinifcation = false;
        $loginOrNot = $_SESSION['logged_in'];
        if($loginOrNot == 1) {
            $hs = $_SESSION['history'];
            if ($hs != NULL) {
                $sql = "SELECT * FROM items WHERE (`name` LIKE '%" . $hs . "%')";
                $result = mysqli_query($conn, $sql);
                $isThereNinifcation = mysqli_num_rows($result)>0?true:false;
            }
        }
        if( (int)$loginOrNot != 1){
            echo ("<div class='w3-right' id='loginButtonDiv' style='padding-right:10px;padding-left: 2px' ><a href='../page_parts/login_System/index.php'><button id='Login' type='button'   style='width: 90px;color: black;' class='btn fa fa-sign-in' ></button></a></div>");
        }
        if( (int)$loginOrNot == 1) {
            echo("<div class='w3-right' style='padding-right:10px;padding-left: 2px'><a href='../PAGES/cart_show_page.php'><button id='Login' type='button'  style='width: 90px;color: black;' class='btn fa fa-user' ></button></a></div>");
            if($isThereNinifcation) {
                echo("<div class='w3-right' style='padding-right:10px;padding-left: 2px;'><a href='../PAGES/interests.php'><button id='interests' type='button' style='width: 90px;color: black;' class='btn-success' ><i class='fa fa-envelope' aria-hidden='true' '></i></button></a></div> ");
                echo ("<script>alert('WE have found some thing you interest in, check the NOTIFICATION box ');</script>");
            } else {
                echo("<div class='w3-right' style='padding-right:10px;padding-left: 2px;'><a href='../PAGES/interests.php'><button id='interests' type='button' style='width: 90px;color: black;' class='btn' ><i class='fa fa-envelope' aria-hidden='true' '></i></button></a></div>");
            }
            echo("<div class='w3-right' style='padding-right:10px;padding-left: 2px'><a href='.././page_parts/login_System/logout.php'><button id='home' type='button'   style='width: 90px;color: black;' class='btn' >Logout</button></a></div>");
        }
        ?>
    </div>

        div.panel {
            padding: 0 5px;
            margin: 0;
            display: none;
            background-color: white;
        }
        .head {
            background-image: url("http://wallpaperswide.com/download/shopping_arcade-wallpaper-3840x2160.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>



<div>

    <nav class="w3-right" >
        <nav class=" w3-sidebar w3-bar-block  w3-white  w3-animate-right  " style="z-index:3;width:200px;display:none" id="mySidebar" >
            <button class="w3-bar-item w3-button w3-large w3-center" onclick="w3_close()">Close &times;</button>
            <div class="w3-container w3-display-container w3-padding-16">
                <h3 class="w3-wide w3-center"><img src="https://image.ibb.co/g7Hy5w/Diversty_Shop_Home_Page_LOGO.png" height=200pt width=150pt alt ="DiverstyShop"/></h3>
            </div>
            <div>
                <button class="accordion " style="font-weight:bold "  >Cars</button>

                <div class= "panel" style="font-weight:bold">
                    <ul>
                        <a href="#" class="w3-bar-item w3-button" id="toy1"><li  id="toyota">TOYOTA</li></a>
                        <a href="#" class="w3-bar-item w3-button"><li>HYUNDAI</li></a>
                        <a href="#" class="w3-bar-item w3-button"><li>JEEP</li></a>
                        <a href="#" class="w3-bar-item w3-button"><li>Others</li></a>
                    </ul>
                </div>
                <button class="accordion" style="font-weight:bold;">Animals</button>
                <div class="panel" style="font-weight:bold">
                    <ul>
                        <a href="#" class="w3-bar-item w3-button"><li>Cats</li></a>
                        <a href="#" class="w3-bar-item w3-button"><li>Dogs</li></a>
                        <a href="#" class="w3-bar-item w3-button"><li>Others</li></a>
                    </ul>
                </div>
                <button class="accordion" style="font-weight:bold">Plants</button>
                <div class="panel" style="font-weight:bold">
                    <ul>
                        <a href="#" class="w3-bar-item w3-button"><li>Flowers</li></a>
                        <a href="#" class="w3-bar-item w3-button"><li>Plants</li></a>
                        <a href="#" class="w3-bar-item w3-button"><li>Pots</li></a>
                    </ul>
                </div>
                <button class="accordion" style="font-weight:bold">Furniture</button>

                <div class="panel" style="font-weight:bold">
                    <ul>
                        <a href="#" class="w3-bar-item w3-button"><li>Couches</li></a>
                        <a href="#" class="w3-bar-item w3-button"><li>Chairs</li></a>
                        <a href="#" class="w3-bar-item w3-button"><li>Beds</li></a>
                    </ul>
                </div>
            </div>

        </nav>



        <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
        <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
    </nav>



    <!-- Top menu on small screens and larg screen -->
    <header  class="w3-bar w3-top  w3-black  head" style="margin-left: 0pt;text-align: center;z-index: 2; height: 25 0px;">
        <div class="w3-bar-item w3-padding-24 "><img src="https://image.ibb.co/bTn03G/Diversty_Shop_Home_Page_LOGOSmale_Screen.png" height=200pt width=200pt alt="DiverstyShop"/></div>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>


        <br>
        <div class="w3-right" style="float: right; margin-right: 10pt;">
            <div class="btn-group " >
                <input style="background-color: white;color: black;" type="text" class="btn .btn-default " value="" placeholder = "" >
                <input style="background-color: tomato;color: black;" type="button" class="btn .btn-default " value="GO"></input></div>
        </div>
        <br>
        <br>

        <div style="padding-right: 50px;">
            <div  class="w3-right" style="padding-right:10px;padding-left: 2px"><a href="../PAGES/HomeDStest.php"><button id="home" type="button"   style="width: 90px;color: black; background-color: white; " class="btn fa fa-home" ></button></a></div>
        </div>