<!DOCTYPE html>
<html lang="en">
<?php 
include("../conn.php");
?>
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
            <div class="container">
                <div class="container">
                    <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100" style="color: white">EVENTS & PROMO</div>
                    <br><br>

                    <div class="row">
                        <div class="col-md-4">
                            <div id="Promotion_tab1"  class="promo_category_active" onclick="active_promo_tab1()">EVENTS</div>
                        </div>
                        <div class="col-md-4">
                            <div id="Promotion_tab2"  class="promo_category" onclick="active_promo_tab2()">PROMO</div>
                        </div>
                        <div class="col-md-4">
                            <div id="Promotion_tab3"  class="promo_category" onclick="active_promo_tab3()">WINNER ANNOUNCEMENT&nbsp;<i class="fa fa-trophy"></i></div>
                        </div>
                    </div>


                    <br><br>


                    <div id="Events" class=" animated fadeInLeft visible"  >
                        <?php  
                        $sqlEvent = mysql_query("SELECT * FROM epa WHERE kategori_epa = 'Events' ORDER BY id DESC ");
                        while($sqlEvent1 = mysql_fetch_array($sqlEvent)){

                            ?>
                            <div style=" background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%);">
                                <div class="col-md-6 col-sm-12 col-xs-12" >
                                    <img src="../prambors_images_assets/epa/<?php echo $sqlEvent1[0] ?>.jpg" alt="" class="img-responsive" style="width: 100%; margin-top: 25px;">
                                </div>
                                <div class="col-md-6  col-sm-12 col-xs-12">
                                    <div class="title" style="font-size: 20px;"><br><b><?php echo $sqlEvent1['judul_epa']." | ".$sqlEvent1['tanggal'] ?></b></div>
                                    <p style="color: black;"><?php echo htmlspecialchars_decode($sqlEvent1['konten_epa']) ?></p>
                                </div>



                                <div class="row">
                                    <div class="col-md-12"><br>

                    </div>
                </div>
            </div>
            <br>
            <?php } ?>
        </div>

        <div id="Promotion" class=" animated fadeInLeft visible"  >
            <?php  
           $sqlPromotion = mysql_query("SELECT * FROM epa WHERE kategori_epa = 'Promotion' ORDER BY id DESC ");
            while($sqlPromotion1 = mysql_fetch_array($sqlPromotion)){

                ?>
                <div style=" background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%);">
                    <div class="col-md-6 col-sm-12 col-xs-12" >
                        <img src="../prambors_images_assets/epa/<?php echo $sqlPromotion1[0] ?>.jpg" alt="" class="img-responsive" style="width: 100%; margin-top: 25px;">
                    </div>
                    <div class="col-md-6  col-sm-12 col-xs-12">
                        <div class="title" style="font-size: 20px;"><br><b><?php echo $sqlPromotion1['judul_epa']." | ".$sqlPromotion1['tanggal'] ?></b></div>
                        <p style="color: black;"><?php echo htmlspecialchars_decode($sqlPromotion1['konten_epa']) ?></p>
                    </div>



                    <div class="row">
                        <div class="col-md-12"><br>

                    </div>
                </div>
            </div>
            <br>
            <?php } ?>
        </div>



        <div id="Annoucement" class=" animated fadeInLeft visible"  >
            <?php  
              $sqlAnnouncement = mysql_query("SELECT * FROM epa WHERE kategori_epa = 'Annoucement' ORDER BY id DESC ");  
              while($sqlAnnouncement1 = mysql_fetch_array($sqlAnnouncement)){
                ?>
                <div style=" background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%);">
                    <div class="col-md-6 col-sm-12 col-xs-12" >
                        <img src="../prambors_images_assets/epa/<?php echo $sqlAnnouncement1[0] ?>.jpg" alt="" class="img-responsive" style="width: 100%; margin-top: 25px;">
                    </div>
                    <div class="col-md-6  col-sm-12 col-xs-12">
                        <div class="title" style="font-size: 20px;"><br><b><?php echo $sqlAnnouncement1['judul_epa']." | ".$sqlAnnouncement1['tanggal'] ?></b></div>
                        <p style="color: black;"><?php echo htmlspecialchars_decode($sqlAnnouncement1['konten_epa']) ?></p>
                    </div>



                    <div class="row">
                        <div class="col-md-12"><br>

                    </div>
                </div>
            </div>
            <br>
            <?php } ?>
        </div>




</div>

<style type="text/css">

.promo_category{
    color:#ffc925; 
    border-bottom: 1px solid #ffc925; 
    padding: 5px; 
    cursor:pointer; 
    font-size: 20px;
    width: 100%;
    text-align: center;
    margin-right: 5px;
    margin: 0 auto;
    text-transform: uppercase;
    transition: 0.5s;
}
.promo_category:hover{
   color:#000; 
   background: #ffc925; 
   padding: 5px; 
   cursor:pointer; 
   font-size: 20px;
   width: 100%;
   text-align: center;
   margin-right: 5px;
   margin: 0 auto;
   text-transform: uppercase;
}
.promo_category_active{
   color:#000; 
   background: #ffc925; 
   padding: 5px; 
   cursor:pointer; 
   font-size: 20px;
   width: 100%;
   text-align: center;
   margin-right: 5px;
   margin: 0 auto;
   text-transform: uppercase;
}
</style>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
    function active_promo_tab2(){
        $("#Promotion_tab2").removeClass("promo_category").addClass("promo_category_active");
        $("#Promotion_tab1").removeClass("promo_category_active").addClass("promo_category");
        $("#Promotion_tab3").removeClass("promo_category_active").addClass("promo_category");

        $("#Promotion").css("display","block");
        $("#Events").css("display","none");
        $("#Annoucement").css("display","none");
    }
    function active_promo_tab3(){
        $("#Promotion_tab3").removeClass("promo_category").addClass("promo_category_active");
        $("#Promotion_tab1").removeClass("promo_category_active").addClass("promo_category");
        $("#Promotion_tab2").removeClass("promo_category_active").addClass("promo_category");

        $("#Annoucement").css("display","block");
        $("#Events").css("display","none");
        $("#Promotion").css("display","none");
    }
    function active_promo_tab1(){
        $("#Promotion_tab1").removeClass("promo_category").addClass("promo_category_active");
        $("#Promotion_tab2").removeClass("promo_category_active").addClass("promo_category");
        $("#Promotion_tab3").removeClass("promo_category_active").addClass("promo_category");

        $("#Events").css("display","block");
        $("#Promotion").css("display","none");
        $("#Annoucement").css("display","none");
    }

    $(document).ready(function() {
        $("#Promotion").css("display","none");
        $("#Annoucement").css("display","none");
    });
</script>


<!-- END -->

<br><br><br>


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