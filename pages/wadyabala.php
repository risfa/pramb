<!DOCTYPE html>
<html lang="en">
<?php 
    include("../conn.php");
?>
<head>
   
    <link rel="icon" href="../images/favicon.png" type="image/x-icon" />
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/camera.css" rel="stylesheet">
    <link href="../css/mediaelementplayer.css" rel="stylesheet">
    <link href="../css/slick.css" rel="stylesheet">
    <link href="../css/my_css.css" rel="stylesheet">
    <link href="../css/slick-theme.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>
<body class="onepage front" data-spy="scroll" data-target="#top1" data-offset="92">

<div id="load"></div>

<div id="main">

    <div id="home">
        <?php include("../index_parts/page_slider.php"); ?>
    </div>

    <div id="top1">
        <?php include("../index_parts/page_menubar.php"); ?>
    </div>

        <?php include('index_parts/ads_slot.php') ?>
        

        <div class="row">
            <?php include('content_wadyabala.php'); ?>
        </div>

</div> <!-- CLOSE DIV BODY -->

    <?php include("../index_parts/page_footer.php"); ?>




</div>



<script src="../js/jquery.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/superfish.js"></script>

<script src="../js/camera.js"></script>

<script src="../js/mediaelement-and-player.js"></script>
<script src="../js/mep-feature-playlist.js"></script>
<script src="../js/slick.min.js"></script>

<script src="../js/jquery.jrumble.1.3.min.js"></script>

<script src="../js/jquery.sticky.js"></script>

<script src="../js/jquery.queryloader2.js"></script>

<script src="../js/jquery.appear.js"></script>

<script src="../js/jquery.ui.totop.js"></script>
<script src="../js/jquery.equalheights.js"></script>

<script src="../js/jquery.caroufredsel.js"></script>
<script src="../js/jquery.touchSwipe.min.js"></script>

<!-- <script src="../js/SmoothScroll.js"></script> -->

<script src="../js/cform.js"></script>

<script src="../js/scripts.js"></script>
</body>

</html>