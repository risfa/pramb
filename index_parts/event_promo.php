<br><br><br>
    <div class="container"  style="padding:20px;">
    <br><br><br>
      <!-- <div class="col-md-8"> -->
        <div class="container">
          <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100" style="color: white">EVENTS & PROMO</div>
          <br><br>

          <div class="row">
            <div class="col-md-4" style="margin-left:-15px;">
              <div id="Promotion_tab1"  class="promo_category_active" onclick="active_promo_tab1()">EVENTS</div>
            </div>
            <div class="col-md-4" style="margin-left:-15px;">
              <div id="Promotion_tab2"  class="promo_category" onclick="active_promo_tab2()">PROMO</div>
            </div>
            <div class="col-md-4" style="margin-left:-15px;">
              <div id="Promotion_tab3"  class="promo_category" onclick="active_promo_tab3()">WINNER ANNOUNCEMENT&nbsp;<i class="fa fa-trophy"></i></div>
            </div>
          </div>
        </div>


        <br><br>


        <?php  
        $sqlEvent1 = mysql_fetch_array(mysql_query("SELECT * FROM epa WHERE kategori_epa = 'Events' ORDER BY id DESC "));
        ?>

        <div id="Events" class=" animated fadeInLeft visible""  style=" background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%); width:101%;">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <img src="prambors_images_assets/epa/<?php echo $sqlEvent1[0] ?>.jpg" alt="" class="img-responsive" style="width: 100%; margin-top: 25px;">
          </div>
          <div class="col-md-6  col-sm-12 col-xs-12">
          <!-- <a target="_blank" style="text-decoration:none"  href="http://www.pramborsfm.com/pages/epa_details.php?details=<?php echo $sqlEvent1[0]  ?>"></a> -->
           <div class="title" style="font-size: 20px;"><br><b><?php echo $sqlEvent1['judul_epa'] ?></b></div>
            <p style="color: black;"><?php echo substr($sqlEvent1['konten_epa'],0,190)."..."; ?>
              
              <a target="_blank" style="text-decoration:none"  href="http://www.pramborsfm.com/pages/epa_details.php?details=<?php echo $sqlEvent1[0]  ?>"> <div class="title" style="font-size: 20px;"><br><b style="color: black;background: #fdf000; padding: 5px; text-decoration:none;">Read More</b></div></a>
            </p>
          </div>



          <div class="row">
            <div class="col-md-12">
              <div style="float: right;">
                <a href="pages/promo_news.php" class="btn-default btn3 animated fadeInDown" style="border-radius: 10px 0px 0px; background:#252525; padding:10px;">READ ANOTHER SURPRISE</a>
              </div>
            </div>
          </div>

        </div>




        <?php  
        $sqlPromotion1 = mysql_fetch_array(mysql_query("SELECT * FROM epa WHERE kategori_epa = 'Promotion' ORDER BY id DESC "));
                    // $sqlPromotion2 = mysql_fetch_array(mysql_query("SELECT * FROM epa WHERE kategori_epa = 'Promotion' ORDER BY id DESC LIMIT 2,1 "));
        ?>

        <div id="Promotion" class=" animated fadeInLeft visible""  style=" background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%); width:101%;">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <img src="prambors_images_assets/epa/<?php echo $sqlPromotion1[0] ?>.jpg" alt="" class="img-responsive" style="width: 100%; margin-top: 25px;">
          </div>
          <div class="col-md-6  col-sm-12 col-xs-12">
            <div class="title" style="font-size: 20px;"><br><b><?php echo $sqlPromotion1['judul_epa'] ?></b></div>
            <p style="color: black;"><?php echo substr($sqlPromotion1['konten_epa'],0,190)."..."; ?>
              
              <a target="_blank" style="text-decoration:none"  href="http://www.pramborsfm.com/pages/epa_details.php?details=<?php echo $sqlPromotion1[0]  ?>"> <div class="title" style="font-size: 20px;"><br><b style="color: black;background: #fdf000; padding: 5px; text-decoration:none;">Read More</b></div></a>
            </p>
          </div>


          <div class="row">
            <div class="col-md-12">
              <div style="float: right;">
                <a href="pages/promo_news.php" class="btn-default btn3 animated fadeInDown" style="border-radius: 10px 0px 0px; background:#252525; padding:10px;">READ ANOTHER SURPRISE</a>
              </div>
            </div>
          </div>

        </div>



        <?php  
        $sqlAnnouncement1 = mysql_fetch_array(mysql_query("SELECT * FROM epa WHERE kategori_epa = 'Annoucement' ORDER BY id DESC "));
                    // $sqlAnnouncement2 = mysql_fetch_array(mysql_query("SELECT * FROM epa WHERE kategori_epa = 'Annoucement' ORDER BY id DESC LIMIT 2,1 "));
        ?>

        <div id="Annoucement" class=" animated fadeInLeft visible""  style=" background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%); width:101%;">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <img src="prambors_images_assets/epa/<?php echo $sqlAnnouncement1[0] ?>.jpg" alt="" class="img-responsive" style="width: 100%; margin-top: 25px;">
          </div>
          <div class="col-md-6  col-sm-12 col-xs-12">
            <div class="title" style="font-size: 20px;"><br><b><?php echo $sqlAnnouncement1['judul_epa'] ?></b></div>
            <p style="color: black;"><?php echo substr($sqlAnnouncement1['konten_epa'],0,190)."..."; ?>
              
              <a target="_blank" style="text-decoration:none"  href="http://www.pramborsfm.com/pages/epa_details.php?details=<?php echo $sqlAnnouncement1[0]  ?>"> <div class="title" style="font-size: 20px;"><br><b style="color: black;background: #fdf000; padding: 5px; text-decoration:none;">Read More</b></div></a>
            </p>
          </div>


          <div class="row">
            <div class="col-md-12">
              <div style="float: right;">
                <a href="pages/promo_news.php" class="btn-default btn3 animated fadeInDown" style="border-radius: 10px 0px 0px; background:#252525; padding:10px;">READ ANOTHER SURPRISE</a>
              </div>
            </div>
          </div>

        </div>

      <!-- </div> -->  
      
    </div>
    <div class="row">
   <div class="container" >
    <div class="visible-sm visible-xs" style="margin-top:80px"></div>
    <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100" style="color: white; margin-top: 50px;">INSTAGRAM FEED</div>

    <div > 
        <?php



        $sqlEventInstagram =mysql_query("SELECT caption,link,image_url FROM  `instagram` LIMIT 0 , 9 ");

        while ($data = mysql_fetch_array($sqlEventInstagram)) {
          
       
     




        $id=1;

        echo '<center><div class="col-md-4 col-xs-4 conte" style="width:40vh;  margin-top: 0px; "><a class="instagram-unit" target="blank" href="'.$data['link'].'">
        <img class="fotonya" src="'.$data['image_url'].'" alt="'.$data['caption'].'" width="100%" height="auto" align="middle" />
       </a></div></center>';


        ?>

  <style >
  .conte
  {
    background-color:none;
    min-height: 40vh;
    margin-left: 5vh;
  }
 

 @media (min-width: 320px) and (max-width: 480px)

 {
  .conte
  {
    width: 33% !important;
    margin-top: -15vh !important;
    margin-bottom: -7vh !important;  
    margin-left: 0px !important;
  }


.title2 
{
    margin-bottom: 20vh !important;
}
}

@media (min-width: 700px) and (max-width: 1100px)

 {
  .conte
  {
    width: 22vh !important;
    margin-left: 0px !important;
    margin-top: -13vh !important;
  }
.title2 
{
    margin-bottom: 15vh !important;
}
 }


</style> 
<?php   

        // echo('baba');
        // echo  '<a class="instagram-unit" target="blank" href="'.$data['link'].'"> <div class="col-xl-4 col-lg-4col-md-4 col-sm-4 col-xs-4 instagram"><div class="content'.$id.'"><img class="insta" src="" alt=""  height="auto" /></div></div> </a>';

      $id++;

       }

  ?>
</div>

<center>
    <div>
   </div>
</center>
</div>

<center>    
<div>   
<a style="text-decoration :none; " " href="https://www.instagram.com/prambors/" target="blank"><div class="viewall" style="color:#ffc925; border:solid 1px #ffc925; max-width: 100px; margin-top: 10px;  ">View All</div></a>
</div>
</div>
</center>


    <style type="text/css">

    .promo_category{
      color:#ffc925; 
      border-bottom: 1px solid #ffc925; 
      padding: 5px; 
      cursor:pointer; 
      font-size: 20px;
      width: 85%;
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
      text-transform: uppercase;
      cursor:pointer; 
      font-size: 20px;
      width: 85%;
      text-align: center;
      margin-right: 5px;
      margin: 0 auto;
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

    @media (min-width: 1281px) {
  
      .instawidget > ul >li > a >img
        {
              margin-top: 3px;
    max-width: 98%;
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
      
    }
     a>.viewall
    {
    border: solid 1px #ffc925;
    width:28%;
     color:#ffc925 !important; 
     text-decoration: none;
     margin-top: 5px;
     padding-top: 5px;
     padding-left: 20px;
     padding-right: 20px;
     padding-bottom: 5px;
    }

  a>.viewall:hover
   {
    background-color: #ffc925;
    color:black !important;
   }
}


    @media (min-width: 320px) and (max-width: 480px) {
  
      .instawidget > ul >li > a >img
        {
    margin-right: 6px;

        }
        a>.viewall
    {
    border: solid 1px #ffc925;
    width:28%;
     color:#ffc925; 
     text-decoration: none;
     margin-top: 5px;
     padding-top: 5px;
     padding-left: 20px;
     padding-right: 20px;
     padding-bottom: 5px;
    }

  a>.viewall:hover
   {
    background-color: #ffc925;
    color:black;
   } 
      
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
