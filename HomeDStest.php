<!DOCTYPE html>
<html >
<title>Home_DS_page</title>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="show_item_detail_styles.css">
    <link rel="stylesheet" href="show_item_styles.css">


    <script>


        </script>

    <script>
        $(function(){
            $("#includedContent2").load("footer.html");
            $("#includedContent3").load("slider_show.html");
        });


    </script>



</head>


<body>

<div id="includedContent1">
    <?php
    include_once ('topAndSideBars.html');
    ?>
</div>
<div id="includedContent3"></div>
<div id="includedContent2"></div>
<div id="includeContent4" >
    <?php
    include  ('Show_Items_System/showItmes.php');
    ?>

</div>





</body>
</html>