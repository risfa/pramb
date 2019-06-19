<!DOCTYPE html>
<html lang="en">

<?php 
    include('header.php');
    mysql_connect("localhost","dapps","l1m4d1g1t");
    mysql_select_db("dapps_joker_masimanetwork_prambors");
?>

<head>
    <title>Pramborss FM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">

</head>

<body class="onepage front" data-spy="scroll" data-target="#top1" data-offset="92">

<div id="load"></div>

<div id="main">

    <?php include('slider.php'); ?>

    <?php include('menubar.php'); ?>

    <div id="music">
        <br><br>
        <?php include('music-chart.php'); ?>
    </div>

    <div class="ads1" style="text-align: center; font-size: 80px; height: 500px;">
        ADS SLOT
    </div>
    
    <div class="slick-slider-wrapper" style="" id="shows">
        <?php include('show-list.php'); ?>
    </div>

    <div class="slick-slider-wrapper" style="background: #1b1b1b" id="djs">
        <?php include('wadyabala.php'); ?>
    </div>  

    <div id="news" style="background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%); color: black">
        <?php include('news.php'); ?>
    </div>





    <div id="event_promo"  style="">
        <div class="container">
            <br><br>
             <div class="container" >
                <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100" style="color: white">EVENT & PROMO
                </div>

                <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="200">Lorem ipsum dolor sit amet
                    concateur non tropp sit namo, allegro sustenuto al prada bravo pensare, chicco milo naturo
                </div>
            </div>
            <br><br><br>
            <div class="thumb6 animated fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="200">
                <div class="thumbnail clearfix">
                    <figure class="">
                        <img src="images/style07.jpg" alt="" class="img-responsive">
                    </figure>
                    <div class="caption">
                        <div class="title">HEADER TEXT is the Best Solution</div>
                        <p>
                            Etiam pharetra ut ante eget efficitur. Nullam quis felis at nunc vehicula sollic itudin ut
                            ex. Maecenas eget volutpat turpis. Praesent dapibus eleifend augue, eget sollicitudin velit
                            malesuada eu. Aliquam blandit, diam venenatis feugiat, tellus odio malesuada ex, eu luctus
                            lectus nibh et velit.Ut a maignay eros commodo condimentum quis vitae augue. Fusce venenatis
                            imperdieted arcu eget viverra. Maecenas id risus mollis, blandit mi a, maximus leo ulla id
                            risus mollisfeugiat felis.
                        </p>
                    </div>
                </div>
            </div>
           <div class="thumb6 right animated fadeInRight visible" data-animation="fadeInRight" data-animation-delay="200">
                <div class="thumbnail clearfix">
                    <figure class="">
                        <img src="images/rad.jpg" alt="" class="img-responsive">
                    </figure>
                    <div class="caption">
                        <div class="title">HEADER TEXT and Smooth Works</div>
                        <p>
                            Etiam pharetra ut ante eget efficitur. Nullam quis felis at nunc vehicula sollic itudin ut
                            ex. Maecenas eget volutpat turpis. Praesent dapibus eleifend augue, eget sollicitudin velit
                            malesuada eu. Aliquam blandit, diam venenatis feugiat, tellus odio malesuada ex, eu luctus
                            lectus nibh et velit.Ut a maignay eros commodo condimentum quis vitae augue. Fusce venenatis
                            imperdieted arcu eget viverra. Maecenas id risus mollis, blandit mi a, maximus leo ulla id
                            risus mollisfeugiat felis.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <br><br><br>
    </div>

    </div> <!-- CLOSE DIV BODY -->



 

    



    <div class="bot1_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <div class="col-md-4" class="">
                        <ul class="my-footer-menu">
                            <li>ABOUT US</li>
                            <li>ADVERTISING WITH US</li>
                            <li>POLLING</li>
                            <li>CAREERS</li>
                            <li>FAQ</li>
                            <li>ABOUT THIS WEBSITE</li>
                            <li>CONTACT US</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                         <ul class="my-footer-menu">
                            <li><strong>JAKARTA</strong> 102.2FM</li>
                            <li><strong>BANDUNG</strong> 102.2FM</li>
                            <li><strong>MAKASSAR</strong> 102.2FM</li>
                            <li><strong>MEDAN</strong> 102.2FM</li>
                            <li><strong>SEMARANG</strong> 102.2FM</li>
                            <li><strong>SOLO</strong> 102.2FM</li>
                            <li><strong>SURABAYA</strong> 102.2FM</li>
                            <li><strong>YOGYAKARTA</strong> 102.2FM</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                         <ul class="my-footer-menu">
                            <li><font class="fa fa-twitter-square"></font>&nbsp;&nbsp;<span style="position: absolute;">@pramborsradio</span></li>
                            <li><font class="fa fa-facebook-square"></font>&nbsp;&nbsp;<span style="position: absolute;">Prambors Radio</span></li>
                            <li><font class="fa fa-instagram"></font>&nbsp;&nbsp;<span style="position: absolute;">@pramborsradio</span></li>
                            <li><font class="fa fa-youtube-square"></font>&nbsp;&nbsp;<span style="position: absolute;">PramborsTV</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="col-md-7" style="margin-top: -15px;">
                        <strong style="color: black;">AVAILABLE ON</strong><br>
                        <img src="images/app1.png">
                        <img src="images/app2.png">
                    </div>
                    <div class="col-md-5">
                        <img src="images/prambors_asset/masima_logo.png" style="width: 100%; margin-top: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bot2_wrapper">
        <div class="container">
            Copyright © 2018 Prambors</a>
        </div>
    </div>


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

<script src="js/SmoothScroll.js"></script>

<script src="js/cform.js"></script>

<script src="js/scripts.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
            $('#wadyabala-show').load('get_wadyabala.php');

    })
</script>

 <!-- <script type="text/javascript">
    $(document).ready(function(){
        // alert('test');
        var html = ""
         $.ajax({
        url : "https://joker.5dapps.com/masimanetwork/cms/Method/show_music_chart",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {


             $.each(data, function(i, field){

                    console.log(field);
                    html+="<tr>"+
                            // "<td>1</td>"+
                            "<td>"+
                                "<img src='images/albumart.jpg' style='height: 70px; width:70px; float: left;'>"+
                                "<div style='float: left; margin-top: '>"+
                                    "<font class='fa fa-sort-asc' style='font-size: 40px; color: #35d27b;margin-top: 22px;margin-left: 10px;'></font>"+
                                "</div>"+
                            "</td>"+
                            "<td>"+field.song_tittle+"</td>"+
                            "<td>"+field.artist+" </td>"+
                            "<td>"+field.album+" </td>"+
                            "<td>"+field.genre+" </td>"+
                            "<td>"+
                                "<button type='button' class='btn  chartbutton' style='background:#ffc925; width: 100%;'><span class='fa fa-play'></span></button>"+
                            "</td>"+
                        "</tr>";


                                                     
            });
             $('#music-chart').append(html);
                

                }
        
         });




          var html_wadyabala = ""
         $.ajax({
        url : "https://joker.5dapps.com/masimanetwork/cms/Method/show_wadyabala",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {


             $.each(data, function(i, field){

                    console.log(field);
                    // html_wadyabala+="<div class='txt1'><span>"+field.nama+"</span></div>"+
                    // "<div class='txt2'><span>"+field.jabatan+"</span></div>"+
                    // "<div class='txt3'><a href='#' class='btn-default btn1'>MORE DETAILS</a></div>";



                    // html_wadyabala +=  "<figure class='frame-penyiar-prambors'><img src='images/banner1.jpg' alt='' class='img-responsive' ></figure>"+
                    //                     "<div   class='caption'>"+
                    //                     "<div class='txt1'><span>"+field.nama+"</span></div>"+
                    //                     "<div class='txt2'><span>"+field.jabatan+"</span></div>"+
                    //                     "<div class='txt3'><a href='#' class='btn-default btn1'>MORE DETAILS</a></div>"+
                    //                     "</div>"+
                    //                     "<div class='slick-slider-overlay'></div>";

                    html_wadyabala += '<div>'+
                                        '<div class="slick-slider-inner">'+
                                            '<figure class="frame-penyiar-prambors" style=""><img src="images/banner1.jpg" alt="" class="img-responsive"  style=""></figure>'+
                                            '<div class="caption">'+
                                                '<div class="txt1"><span>Music - John Coltrain</span></div>'+
                                                '<div class="txt2"><span>The Dream Of My Life</span></div>'+
                                                '<div class="txt3"><a href="#" class="btn-default btn1">MORE DETAILS</a></div>'+
                                            '</div>'+
                                            '<div class="slick-slider-overlay"></div>'+
                                        '</div>'+
                                    '</div>';   



                                                     
            });
                
                }
         });
             $('#wadyabala-show').append(html_wadyabala);

    })
</script> -->
</body>

</html>