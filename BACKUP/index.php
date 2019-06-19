<!DOCTYPE html>
<html lang="en">
<?php 
    include("conn.php");
?>
<head>
    <title>Pramborss Radio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prambors merupakan radio hits anak muda nomor satu di jakarta">
    <meta name="keywords" content="Radio Prambors, Radio Anak Muda, Radio Hits Jakarta">
    <meta name="author" content="LimaDigit">
    <meta name="theme-color" content="#ffc925">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/camera.css" rel="stylesheet">
    <link href="css/mediaelementplayer.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/my_css.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style type="text/css">
        *{
            font-family: 'Roboto', sans-serif;
        }
    </style>

</head>
<body class="onepage front" data-spy="scroll" data-target="#top1" data-offset="92">

<div id="load"></div>

<div id="main">

    <div id="home">
        <?php include("index_parts/slider.php"); ?>
    </div>

    <div id="top1">
        <?php include("index_parts/menubar.php"); ?>
    </div>

        <div id="music">
            <br><br>
            <?php include("index_parts/music_chart.php"); ?>
        </div>

        <div class=" container-fluid" style="text-align: center; font-size: 80px; background: white; color:red;">
            ADS SLOT
        </div>

        <div class="slick-slider-wrapper" style="" id="shows">
            <?php include("index_parts/show_list.php"); ?>
        </div>

        <div class="slick-slider-wrapper" style="background: #1b1b1b" id="djs">
            <?php include("index_parts/wadyabala.php"); ?>
        </div>

        <div id="news" style="background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%); color: black">
            <?php include("index_parts/news.php"); ?>
        </div>

        <div id="event_promo"  style="">
            <?php include("index_parts/event_promo.php"); ?>
        </div>

</div> <!-- CLOSE DIV BODY -->

    <?php include("index_parts/footer.php"); ?>




</div>



<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/superfish.js"></script>

<script src="js/camera.js"></script>

<script src="js/mediaelement-and-player.js"></script>
<script src="js/mep-feature-playlist.js"></script>
<script src="js/slick.min.js"></script>

<script src="js/jquery.jrumble.1.3.min.js"></script>

<script src="js/jquery.sticky.js"></script>

<script src="js/jquery.queryloader2.js"></script>

<script src="js/jquery.appear.js"></script>

<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script>

<script src="js/jquery.caroufredsel.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>

<!-- <script src="js/SmoothScroll.js"></script> -->

<script src="js/cform.js"></script>

<script src="js/scripts.js"></script>
</body>

</html>