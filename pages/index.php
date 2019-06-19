<!DOCTYPE html>
<html lang="en">
<?php 
include("../conn.php");
if(empty($_GET['details'])){
    echo "<script> window.location.href='../index.php'</script>";
}

?>
<script>
function myFunction1() {
    var x = document.getElementById("baba");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
}
</script>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
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
<div id="baba" class="baba" style="
        
        background-color:black;
        position:fixed;
        width:100%;
        height:100%;
        top:0px;
        left:0px;
        z-index:1000;
        overflow:hidden;
        display: none;
        ">

        <div class="navbar navbar_ navbar-default">
            
                   
                    
                     <img src="../images/prambors_asset/stripe.png" style="height: 60px; margin-top: 17px; margin-left: 5%; float: left;" alt="" class="img-responsive">
                             <h3> <i class="far fa-times-circle" style="color: #ffc925; margin-left: 20% " onclick="myFunction1()""></i></h3>
                     <center>
                    <div class="navbar-collapse navbar-collapse_ expand" style="margin: 0%;" >
                        <ul class="nav navbar-nav sf-menu clearfix" >
                         
                            <li class="navbar-toggle collapsed " data-toggle="expand"
                            data-target=".navbar-collapse" style="padding-top: 0%; padding-bottom: 0%; border-top: 0px solid; "><a href="../index.php#home" onclick="myFunction()" > <b class="menubar_item" style="">HOME</b></a></li>
                            <li class="navbar-toggle " data-toggle="expand"
                            data-target=".navbar-collapse " style=" border-top: 0px solid;"><a href="../index.php#music" onclick="myFunction()"><b class="menubar_item">MUSIC</b></a></li>
                            <li class="navbar-toggle collapsed " style="border-top: 0px solid;" data-toggle="expand"
                            data-target=".navbar-collapse"><a href="../index.php#shows" onclick="myFunction()"><b class="menubar_item">OUR SHOWS</b></a></li>
                            <li class="navbar-toggle collapsed " data-toggle="expand" style="border-top: 0px solid;" 
                            data-target=".navbar-collapse"><a href="../index.php#djs" onclick="myFunction()"><b class="menubar_item">Wadyabala</b></a></li>
                            <li class="navbar-toggle  " style="border-top: 0px solid;" data-toggle="expand"
                            data-target=".navbar-collapse "><a  href="../index.php#news" onclick="myFunction()"><b class="menubar_item">NEWS</b></a></li>
                            <li class="navbar-toggle " data-toggle="expand" style="border-top: 0px solid;" 
                            data-target=".navbar-collapse"><a href="../index.php#event_promo" onclick="myFunction()"><b class="menubar_item">EVENTS & PROMO</b></a></li>
                      
                        </ul>
                    </div>
                    </center>
            
                </div>

    </div>
<body class="onepage front" data-spy="scroll" data-target="#top1" data-offset="92">

    <div id="load"></div>

    <div id="main">
        <div id="home">
            <?php include("../index_parts/page_slider.php"); ?>
        </div>

        <div id="top1">
            <?php include("../index_parts/page_menubar.php"); ?>
        </div>

        <?php include('../index_parts/ads_slot.php') ?>
        <?php 
        $data_news_1 = mysql_fetch_array(mysql_query("SELECT * FROM pages  WHERE idPages = '$_GET[details]' ")); 
        ?>
        <div class="container" class="backdrop">
            <br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #ffc925; font-weight: bold; font-size: 40px; line-height: 80%"><?php echo $data_news_1['PagesTitle'] ?></h1>
                    <font style="color: white;"> <?php echo $data_news_1['Date'] ?></font>   
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-9">
                    <div class="post post-short" style="margin-top: -35px;"> 
                        <div class="post-header">
                            <div class="post-image">
                                <img src="../prambors_images_assets/news/<?php echo $_GET['details'] ?>.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="post-story" style="color: white;">
                            <div class="post-story-body clearfix">
                                <p class="txt1" style="font-size: 20px; color: white;">
                                    <?php echo htmlspecialchars_decode($data_news_1[2]) ?><br>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

                
            </div>

        </div>
    </div> <!-- CLOSE DIV BODY -->

    <?php include("../index_parts/page_footer.php"); ?>

</div>

<style type="text/css">
.backdrop{
    color: white;
}
.txt1 > span{
    color: white !important;
}
</style>


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