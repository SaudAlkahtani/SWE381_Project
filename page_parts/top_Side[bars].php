Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Explore
@SaudAlqahtani
Sign out
Watch 0
Star 0  Fork 0 SaudAlqahtani/SWE381_Project Private
Code  Issues 0  Pull requests 2  Projects 0  Wiki  Insights  Settings
Tree: 4631fb073e Find file Copy pathSWE381_Project/page_parts/top_Side[bars].php
4631fb0  an hour ago
@AbdulrhmanAlhossan AbdulrhmanAlhossan saleh edit
1 contributor
RawBlameHistory
Executable File  165 lines (141 sloc)  7.78 KB

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
    .head {
        background-image: url("https://wallpaperscraft.com/image/space_art_universe_97750_3840x2160.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    button.accordion.active, button.accordion:hover {
        background-color: #ccc;
        color:black;
        font-size: 20px;
    }
    div.panel {
        padding: 0 5px;
        margin: 0;
        display: none;
        background-color: white;
    }
</style>

<nav class="w3-right" >
    <nav class=" w3-sidebar w3-bar-block  w3-white  w3-animate-right  " style="z-index:3;width:200px;display:none" id="mySidebar" >
        <button class="w3-bar-item w3-button w3-large w3-center" onclick="w3_close()">Close &times;</button>
        <div class="w3-container w3-display-container w3-padding-16">
            <h3 class="w3-wide w3-center"><img src="https://image.ibb.co/g7Hy5w/Diversty_Shop_Home_Page_LOGO.png" height=200pt width=150pt alt ="DiverstyShop"/></h3>
        </div>
        <div>
            <a href="../PAGES/CarTapPage.php"><button class="accordion " style="font-weight:bold "  >Cars</button></a>
            <div class= "panel" style="font-weight:bold">
            </div>
            <a href="../PAGES/AnimalTapPage.php"><button class="accordion" style="font-weight:bold;" >Animals</button></a>
            <div class="panel" style="font-weight:bold">
            </div>
            <a href="../PAGES/PlantTapPage.php"><button class="accordion" style="font-weight:bold">Plants</button></a>
            <div class="panel" style="font-weight:bold">
            </div>
            <a href="../PAGES/FurnitureTapPage.php"><button class="accordion" style="font-weight:bold">Furniture</button></a>

            <div class="panel" style="font-weight:bold">
            </div>
        </div>

    </nav>



    <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
    <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>



<!-- Top menu on small screens and larg screen -->
<header  class="w3-bar w3-top  w3-black  head" style="margin-left: 0pt;text-align: center;z-index: 2">
    <div class="w3-bar-item w3-padding-24 " style="background-color: black"><a style="background-color: black"  href="../PAGES/HomeDStest.php">
            <img style="background-color: black" src="https://image.ibb.co/bTn03G/Diversty_Shop_Home_Page_LOGOSmale_Screen.png" height=140pt width=150pt alt="DiverstyShop"/></a></div>

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>

    <!-- search and cart button and text bar-->
    <br>
    <div class="w3-right" style="float: right; margin-right: 10pt;">
        <form action="../PAGES/searched%20items.php"
        <div  class="btn-group">
            <input style="background-color: lightgray;color: black;" type="text" minlength="3" name="query" class="btn .btn-default w3-lightGray " value="" placeholder = "" >
            <input style="background-color: tomato; color: black" type="submit" name="" class="btn .btn-default" value="search"></input></div>
        </form>
        <div class="w3-right" style="padding-right:10px;padding-left: 2px"><a href="../PAGES/HomeDStest.php"><button id="home" type="button"   style="width: 90px;color: black;" class="btn fa fa-home" ></button></a></div>
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
            echo("<div class='w3-right' style='padding-right:10px;padding-left: 2px'><a href='../PAGES/cart_show_page.php'><button  type='button'  style='width: 90px;color: black;' class='btn fa fa-user' ></button></a></div>");
            if($isThereNinifcation) {
                echo("<div class='w3-right' style='padding-right:10px;padding-left: 2px;'><a href='../PAGES/interests.php'><button id='interests' type='button' style='width: 200px;color: black;' class='btn-success' ><i class='fa fa-envelope' aria-hidden='true' '></i></button></a></div> ");
                echo ("<script>alert('WE have found some thing you interest in, check the NOTIFICATION box ');</script>");
            } else {
                echo("<div class='w3-right' style='padding-right:10px;padding-left: 2px;'><a href='../PAGES/interests.php'><button id='interests' type='button' style='width: 90px;color: black;' class='btn ' ><i class='fa fa-envelope' aria-hidden='true' '></i></button></a></div>");
            }
            echo("<div class='w3-right' style='padding-right:10px;padding-left: 2px'><a href='.././page_parts/login_System/logout.php'><button  type='button'   style='width: 90px;color: black;' class='btn' >Logout</button></a></div>");
        }
        ?>
        <br>
        <br>
        <h1 style="color: lightgray">EASY SHOPPING..</h1>
    </div>
</header>

<!-- Overlay (effect when opening sidebar) on small screens and larg screen-->
<div class="w3-overlay w3-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Top header -->
<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
© 2017 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
About