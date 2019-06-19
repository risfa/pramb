<div class="container" style="margin-top: -90px;">
    <div class="title2 animated hidden-sm hidden-xs" data-animation="fadeInUp" data-animation-delay="100" style="color: white">WADYABALA
        <font id="djfont" class="activefont" style="color: #ffc925">DJ</font> & 
        <a href="pages/wadyabala.php" style="text-decoration: none;"><font class="btnCrews"  id="crewfont" style="text-align: center; padding-left: 12px;">CREWS</font></a>
    </div>
    <div class="title2 animated hidden-lg hidden-xl hidden-md" data-animation="fadeInUp" data-animation-delay="100" style="color: white">WADYABALA<br>
        <font id="djfont" class="activefont" style="color: #ffc925">DJ</font> & 
        <a href="pages/wadyabala.php" style="text-decoration: none; "><font class="btnCrews"  id="crewfont" style="text-align: center;">CREWS</font></a>
    </div>

    <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="200">Cari tahu siapa saja yang biasa menemani hari-hari kamu di Prambors</div>
</div>
<br><br><br>
<br><br><br>

<div class="container">
    <div class="container" id="announcer_wadyabala"> 

        <div class="slick-slider slider center">
            <?php 
                $sql = mysql_query("SELECT * FROM wadyabala WHERE kategori = 'Announcer' ORDER BY  RAND()"); 
                    while($data = mysql_fetch_array($sql)){
            ?>
            <div>
                <div class="slick-slider-inner">
                    <figure class="frame-penyiar-prambors">
                        <div class="overlay<?php echo $data[0] ?>">
                        <div class="txt1" style="font-size: 10px;"><br> <br> <br> <br>  <?php echo $data['keterangan']; ?></div>
                           </div>
                        

                        <style type="text/css">
                                .overlay<?php echo $data[0] ?> {
                                      border-radius: 1000px;
                                      position: absolute;
                                      top: 0;
                                      bottom: 0;
                                      left: 0;
                                      right: 0;
                                      height: 100%;
                                      width: 100%;
                                      opacity: 0;
                                        padding: 30px;
                                      transition: .5s ease;
                                      background-color: #ffc925;
                                      
                                    }

                                    .overlay<?php echo $data[0] ?>:hover {
                                      opacity: 1;
                                      border-radius: 1000px;
                                        padding: 30px;
                                        height: 100%;
                                        word-wrap: break-word;
                                    }
                        </style>
                        <img  src="prambors_images_assets/wadyabala_assets/<?php echo $data[0]  ?>.jpg" alt="" class="img-responsive"  >
                    </figure>
                    <center>
                        <div>
                    <div class="caption">
                        <div class="b txt2" style="color: #252525;"><span style="border-radius: 5px;"><?php echo $data['nama'] ?></span></div>
                        <div class="b txt1" style="color: #252525;"><span><?php echo $data['jabatan'] ?></span></div>
                    </div>
                    </div>
                    </center>

                    <div class="slick-slider-overlay"></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>


<style type="text/css">
    .btnCrews:hover{
        color:#fff; 
        border: 1px solid #ffc925; 
        background: #ffc925;
        padding: 3px; 
        border-radius: 10px; 
        cursor:hand;
    }
    .btnCrews{
        color:#ffc925; 
        border: 1px solid #ffc925; 
        padding: 3px; 
        border-radius: 10px; 
        cursor:hand;
    }
    @media only screen and (max-width:411px){
        .slick-prev{
            margin-top: 25%;
        }
        .slick-next{
            margin-top: 25%;
        }
    }

    @media only screen and (min-width:412px) and (max-width:768px){
        .slick-prev{
            margin-top: 25%;
        }
        .slick-next{
            margin-top: 25%;
        }
    }

    @media only screen and (min-width:769px){
        .slick-prev{
            margin-top: 5%;
        }
        .slick-next{
            margin-top: 5%;
        }
    }
    .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  max-width: 20%;
  opacity: 0;
  transition: .5s ease;
  background-color: red;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
</style>