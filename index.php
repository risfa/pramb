<!DOCTYPE html>
<html lang="en">
<?php 
include("conn.php");
?>

<head>
   </script>


<script>
function myFunction1() {
    var x = document.getElementById("baba");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
}
</script>


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
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">

    *{
        font-family: 'Roboto', sans-serif;
    }
   

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body class="onepage front" data-spy="scroll" data-target="#top1" data-offset="92">

    <div id="load"></div>

    <div id="main">
<!--         <style type="text/css">
            ::-webkit-scrollbar-button{ display: block; height: 13px; border-radius: 0px; background-color: #AAA; } ::-webkit-scrollbar-button:hover{ background-color: #AAA; } ::-webkit-scrollbar-thumb{ background-color: #ffff00; border-radius: 10px; } ::-webkit-scrollbar-thumb:hover{ background-color: #ffff00; border-radius: 10px; } ::-webkit-scrollbar-track{ background-color: #7e7e7e; } ::-webkit-scrollbar-track:hover{ background-color: #ffc925; } ::-webkit-scrollbar{ width: 10px; }
        </style> -->
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

        <?php include('index_parts/ads_slot.php') ?>

        <div class="slick-slider-wrapper" style="" id="shows">
            <?php include("index_parts/show_list.php"); ?>
        </div>

        <div class="slick-slider-wrapper" style="background: #1b1b1b" id="djs">
            <?php include("index_parts/wadyabala.php"); ?>
        </div>
        
        <?php include('index_parts/ads_slot.php') ?>
        
        <div id="news" style="background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%); color: black">
            <?php include("index_parts/news.php"); ?>
        </div>
        

        <div id="event_promo"  style="">
            <?php include("index_parts/event_promo.php"); ?>
        </div>

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
            
                   
                    
                     <img src="images/prambors_asset/stripe.png" style="height: 60px; margin-top: 17px; margin-left: 5%; float: left;" alt="" class="img-responsive">
                             <h3> <i class="far fa-times-circle" style="color: #ffc925; margin-left: 20% " onclick="myFunction1()""></i></h3>
                     <center>
                    <div class="navbar-collapse navbar-collapse_ expand" style="margin: 0%;" >
                        <ul class="nav navbar-nav sf-menu clearfix" >
                         
                            <li class="navbar-toggle collapsed " data-toggle="expand"
                            data-target=".navbar-collapse" style="padding-top: 0%; padding-bottom: 0%; border-top: 0px solid; "><a href="#home" onclick="myFunction()" > <b class="menubar_item" style="">HOME</b></a></li>
                            <li class="navbar-toggle " data-toggle="expand"
                            data-target=".navbar-collapse " style=" border-top: 0px solid;"><a href="#music" onclick="myFunction()"><b class="menubar_item">MUSIC</b></a></li>
                            <li class="navbar-toggle collapsed " style="border-top: 0px solid;" data-toggle="expand"
                            data-target=".navbar-collapse"><a href="#shows" onclick="myFunction()"><b class="menubar_item">OUR SHOWS</b></a></li>
                            <li class="navbar-toggle collapsed " data-toggle="expand" style="border-top: 0px solid;" 
                            data-target=".navbar-collapse"><a href="#djs" onclick="myFunction()"><b class="menubar_item">Wadyabala</b></a></li>
                            <li class="navbar-toggle  " style="border-top: 0px solid;" data-toggle="expand"
                            data-target=".navbar-collapse "><a  href="#news" onclick="myFunction()"><b class="menubar_item">NEWS</b></a></li>
                            <li class="navbar-toggle " data-toggle="expand" style="border-top: 0px solid;" 
                            data-target=".navbar-collapse"><a href="#event_promo" onclick="myFunction()"><b class="menubar_item">EVENTS & PROMO</b></a></li>
                      
                        </ul>
                    </div>
                    </center>
            
                </div>

    </div> <!-- CLOSE DIV BODY -->

    <?php include("index_parts/footer.php"); ?>




</div>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/superfish.js"></script>


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

<!-- <s`cript src="js/SmoothScroll.js"></script> -->
<!-- <script src="js/jquery-ui.js"></script> -->
<!-- <script src="js/camera.js"></script> -->

<!-- <script src="js/cform.js"></script> -->

<script src="js/scripts.js"></script>
<script type="text/javascript">
    setTimeout(function(){



        $.getJSON('//freegeoip.net/json/?callback=?', function(data) {
      console.log(JSON.stringify(data));
      // console.log(test.ip);
      var url = "https://joker.5dapps.com/masimanetwork/prambors/lihat/api.php"
    // var res = encodeURIComponent(url);

        $.post( url,{ip : data.ip,country_name : data.country_name,city:data.region_name},function( data ) {
              // $( ".result" ).html( data );
              console.log('berhasil');
            });

    });

        
     }, 20000);


</script>
</body>

</html>