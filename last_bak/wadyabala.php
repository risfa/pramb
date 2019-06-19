<div class="container" style="margin-top: -90px;">
    <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100" style="color: white">WADYABALA
    </div>

    <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="200">Lorem ipsum dolor sit amet
        concateur non tropp sit namo, allegro sustenuto al prada bravo pensare, chicco milo naturo
    </div>
</div>
<br><br><br>
<br>

<div class="container">

    <div id="wadyabala-show" class="slick-slider slider center">
        <?php 
            $sql = mysql_query("SELECT * FROM wadyabala");
            while($data = mysql_fetch_array($sql)){
        ?>
        <div>
            <div  class="slick-slider-inner">
                <figure class="frame-penyiar-prambors""><img src="images/banner1.jpg" alt="" class="img-responsive"  ></figure>
                <div   class="caption">
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
