<!DOCTYPE html>
<script>
    function myFunction1() {
        var x = document.getElementById("baba");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }
</script>
<html lang="en">
<?php 
include("../conn.php");
?>
<head>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous"> -->
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

        <?php include('../index_parts/ads_slot.php') ?>
        
        <div class="container" class="backdrop">
            <br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #ffc925; font-weight: bold;">Prambors News Feed</h1>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-9">
                    <?php 
                    include('pagination_ajax/index.php');
                    ?>
                </div>

                <div class="col-md-3">
                    <!-- <h1 style="color: #ffc925; font-weight: bold;">Category</h1> -->
                    
                    <div class="col-md-12">
                           
                        <div >   
                        <div style="color: #ffc925; text-align: right;" >   
                            Category
                        </div>   
                        <div>   <?php 
                        $sql = mysql_query("SELECT * FROM category");
                        while($data = mysql_fetch_array($sql)){
                           ?>    

                           <div style="background-color:#ffc925; margin-top: 3px; border-radius: 3px;  float right; display: inline-block; padding-left: 11px;padding-right: 11px; margin-right: 2px; float: right;">      <?php echo $data['Category'];?></div>

                           <?php } ?>

                       </div>
                   </div>
                
                   </div>
                   </div> 
                   <div class="col-md-8">

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
.hover_oranye_tipis:hover{
   opacity: 0.7;
}
.tcat
{
    background-color: blue;
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