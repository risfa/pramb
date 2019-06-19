<div class="container negative-nienety" style="">
    <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100" style="color: black">PRAMBORS SHOW LIST
    </div>

    <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="200">Cari tahu jadwal siaran untuk menemani hari-hari kamu</div>
</div>
<br><br><br>
<br><br><br>

<div class="container">

    <div class="slick-slider slider center">

        <?php 
            $sql = mysql_query("SELECT * FROM show_list"); 
                while($data = mysql_fetch_array($sql)){
        ?>

        <div>
            <div class="slick-slider-inner">
                <figure><img src="images/banner1.jpg" alt="" class="img-responsive"></figure>
                <div class="caption">
                    <div class="txt2"><span><?php echo $data['nama_show'] ?></span></div>
                    <div class="txt1"><span><?php echo $data['jam_tayang'] ?></span></div>
                    <!-- <div class="txt3"><a href="#" class="btn-default btn1">MORE DETAILS</a></div> -->
                </div>
                <div class="slick-slider-overlay"></div>
            </div>
        </div>

        <?php } ?>

    </div>
</div>