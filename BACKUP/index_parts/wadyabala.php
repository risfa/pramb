<div class="container" style="margin-top: -90px;">
    <div class="title2 animated hidden-sm hidden-xs" data-animation="fadeInUp" data-animation-delay="100" style="color: white">WADYABALA
        <font id="djfont" class="activefont" style="color: #ffc925">DJ's</font> & 
        <a href="pages/wadyabala.php" style="text-decoration: none;"><font class="btnCrews"  id="crewfont" style="text-align: center; padding-left: 12px;">CREWS</font></a>
    </div>
    <div class="title2 animated hidden-lg hidden-xl hidden-md" data-animation="fadeInUp" data-animation-delay="100" style="color: white">WADYABALA<br>
        <font id="djfont" class="activefont" style="color: #ffc925">DJ's</font> & 
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
                $sql = mysql_query("SELECT * FROM wadyabala WHERE kategori = 'Announcer'"); 
                    while($data = mysql_fetch_array($sql)){
            ?>
            <div>
                <div class="slick-slider-inner">
                    <figure class="frame-penyiar-prambors""><img src="images/banner1.jpg" alt="" class="img-responsive"  ></figure>
                    <div class="caption">
                        <div class="txt1"><span><?php echo $data['nama'] ?></span></div>
                        <div class="txt2"><span><?php echo $data['jabatan'] ?></span></div>
                        <div class="txt3"><a href="#" class="btn-default btn1">MORE DETAILS</a></div>
                    </div>
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
    @media only screen and (max-width:376px){
        .slick-prev{
            margin-top: 25%;
        }
        .slick-next{
            margin-top: 25%;
        }
    }

    @media only screen and (min-width:377px) and (max-width:768px){
        .slick-prev{
            margin-top: 5%;
        }
        .slick-next{
            margin-top: 5%;
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
</style>