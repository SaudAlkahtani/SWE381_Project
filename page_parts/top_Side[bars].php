
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
<header  class="w3-bar w3-top  w3-black  " style="margin-left: 0pt;text-align: center;z-index: 2">
    <div class="w3-bar-item w3-padding-24 "><img src="https://image.ibb.co/bTn03G/Diversty_Shop_Home_Page_LOGOSmale_Screen.png" height=100pt width=80pt alt="DiverstyShop"/></div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>

    <!-- search and cart button and text bar-->
    <br>
    <div class="w3-right" style="float: right; margin-right: 10pt;">

        <button type="button" class="btn .btn-default w3-gray" ><a href="../PAGES/cart_show_page.php"><i class="fa fa-shopping-cart w3-margin-right " ></i></a></button>
        <div class="btn-group " >
            <input style="background-color: lightgray;color: black;" type="text" class="btn .btn-default w3-lightGray " value="" placeholder = "Enter here.." >
            <input type="button" class="btn .btn-default w3-gray" value="GO"></input></div>

    </div>
    <br>
    <br>

    <div style="padding-right: 50px;">
    <div  class="w3-right" style="padding-right:10px;padding-left: 2px"><a href="../PAGES/HomeDStest.php"><button id="home" type="button"   style="width: 90px;color: black;" class="btn fa fa-home" ></button></a></div>





    <?php
    $loginOrNot = $_SESSION['logged_in'];

    if( (int)$loginOrNot != 1){
        echo ("<div class='w3-right' id='loginButtonDiv' style='padding-right:10px;padding-left: 2px' ><a href='../page_parts/login_System/index.php'><button id='Login' type='button'   style='width: 90px;color: black;' class='btn fa fa-sign-in' ></button></a></div>");
    }
    if( (int)$loginOrNot == 1) {
        echo("<div class='w3-right' id='loginButtonDiv'  style='padding-right:10px;padding-left: 2px'><a href='../PAGES/cart_show_page.php'><button id='Login' type='button'   style='width: 90px;color: black;' class='btn fa fa-user' ></button></a></div>");
    }
    if((int)$loginOrNot == 1) {
            echo("<div class='w3-right' id='loginButtonDiv'  style='padding-right:10px;padding-left: 2px'><a href='../PAGES/interests.php'><button id='Login' type='button'    style='width: 90px;color: black;' class='btn' ><i class='fa fa-envelope' aria-hidden='true' '></i></button></a></div>");
    }
    if((int)$loginOrNot == 1) {
        echo ("<div  class='w3-right' style='padding-right:10px;padding-left: 2px'><a href='.././page_parts/login_System/logout.php'><button id='home' type='button'   style='width: 90px;color: black;' class='btn' >Logout</button></a></div>");
    }
    ?>
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