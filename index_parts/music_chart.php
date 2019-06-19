<div id="music">
    <div class="container">
        <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100">PRAMBORS MUSIC CHART</div>
        <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="200">Dengarkan lagu-lagu hits pilihan Prambors</div>
        <div class="row">
            <br>
            <div class="col-md-4">
                <div id="music_tab1"  class="music_category_active" onclick="active_tab1()">TOP 40</div>
            </div>
            <div class="col-md-4">
                <div id="music_tab2"  class="music_category" onclick="active_tab2()">bubbling UP song</div>
            </div>
            <div class="col-md-4">
                <div id="music_tab3"  class="music_category" onclick="active_tab3()">Sudut Dengar</div>
            </div>
        </div>
        <br><br><br>
        
        <?php 
        $arr = array('top40','bubblingupsonglist','newrelease');
        foreach ($arr as $value) {
            ?>
            <div id="<?php echo $value ?>" style="margin-top: -35px">
                <div class="radios animated" data-animation="fadeInDown" data-animation-delay="300">
                    <table id="music-chart" style="width: 100%; color: white !important;" class="hidden-sm hidden-xs" >
                        <tr style="color: #8c8989; font-size: 20px;">
                            <td></td>
                            <td style="width: 15%;"></td>
                            <td>Song Title</td>
                            <td>Artist</td>
                            <td>Album</td>
                            <td>Genre</td>
                            <td style="background: url(images/volume.png) center 15px no-repeat;"></td>
                        </tr>
                        <?php 
                        $no = 1;
                        $sql = mysql_query("SELECT * FROM music_chart where category = '$value' ORDER BY urutan ASC");
                        while($data = mysql_fetch_array($sql)){
                           ?> 
                           <tr>
                            <td style="font-size: 25px;"><?php echo $data['urutan']; ?></td>
                            <td>
                                <img src="prambors_images_assets/chart_assets/<?php echo $data[0] ?>.jpg" style="height: 70px; width:70px; float: left;">
                                <div style="float: left; margin-top: ">
                                    <?php  
                                    if($data['status']=='up'){
                                        echo "<img src='https://www.pramborsfm.com/wp-content/themes/pramborsfm/img/chart_up.png' style='height: 30px; margin-top: 22px; margin-left: 10px;'>";
                                    }else if($data['status']=='down'){
                                        echo "<img src='https://www.pramborsfm.com/wp-content/themes/pramborsfm/img/chart_down.png' style='height: 30px; margin-top: 22px;margin-left: 10px;'>";
                                    }else{
                                        echo "<img src='https://www.pramborsfm.com/wp-content/themes/pramborsfm/img/chart_stay.png' style='height: 30px; margin-top: 22px;margin-left: 10px;'>";
                                    }
                                    ?>
                                    <!-- <font class="fa fa-sort-asc" style="font-size: 40px; color: #35d27b;margin-top: 22px;margin-left: 10px;"></font> -->
                                </div>
                            </td>
                            <td><?php  echo $data['song_tittle'] ?></td>
                            <td><?php echo $data['artist'] ?></td>
                            <td><?php echo $data['album'] ?></td>
                            <td><?php echo $data['genre'] ?></td>
                            <td>
                                <a href="<?php echo $data['music_file'] ?>" target="_blank" class="btn  chartbutton" style="background:#ffc925; width: 100%;"><span class="fa fa-play"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7"><hr></td>   
                        </tr>
                        <?php $no++; } ?>
                    </table>
                </div>

                <div class="radios animated" data-animation="fadeInUp" data-animation-delay="300">
                    <table id="music-chart" style="width: 100%; color: white !important;" class="hidden-xl hidden-lg hidden-md">
                       <?php 
                       $no = 1;
                       $sql = mysql_query("SELECT * FROM music_chart where category = '$value' ORDER BY urutan ASC");
                       while($data = mysql_fetch_array($sql)){
                           ?>
                           <tr>
                            <th rowspan="4" style="width: 5%;">
                                <font style="float: left; font-size:25px; "><?php echo $data['urutan']; ?></font>

                            </th>
                            <th rowspan="4" style="width:40%;">
                                <div style="margin-top: 87px; z-index: 999; position: absolute; margin-left: -12px;">
                                    <?php  
                                    if($data['status']=='up'){
                                        echo "<img src='https://www.pramborsfm.com/wp-content/themes/pramborsfm/img/chart_up.png' style='height: 30px; margin-top: 10px; margin-left: 10px; height: 30px;margin-top: 10px;margin-left: 12px;border: 3px solid #252525;border-radius: 180px'>";
                                    }else if($data['status']=='down'){
                                        echo "<img src='https://www.pramborsfm.com/wp-content/themes/pramborsfm/img/chart_down.png' style='height: 30px; margin-top: 10px;margin-left: 10px; height: 30px;margin-top: 10px;margin-left: 12px;border: 3px solid #252525;border-radius: 180px'>";
                                    }else{
                                        echo "<img src='https://www.pramborsfm.com/wp-content/themes/pramborsfm/img/chart_stay.png' style='height: 30px; margin-top: 10px;margin-left: 10px; height: 30px;margin-top: 10px;margin-left: 12px;border: 3px solid #252525;border-radius: 180px'>";
                                    }
                                    ?>

                                    <!-- <font class="fa fa-sort-asc" style="font-size: 40px; color: #35d27b;"></font> -->
                                </div>
                                <img src="prambors_images_assets/chart_assets/<?php echo $data[0] ?>.jpg" style="height: 130px; width:130px; padding: 6px;">
                            </th>
                            <th style="padding-left: 10px; padding-top:20px;"><?php echo $data['song_tittle'] ?></th>
                        </tr>
                        <tr style="`padding-left: 10px;">
                            <td style="padding-left: 10px"><?php echo $data['artist'] ?></td>
                        </tr>
                        <tr style="padding-left: 10px;">
                            <td style="padding-left: 10px;"><?php echo $data['album'] ?> - <?php echo $data['genre'] ?></td>
                        </tr>
                        <tr style="padding-left: 10px;">
                            <td>  <a href="<?php echo $data['music_file'] ?>" target="_blank" class="btn  chartbutton" style="background:#ffc925; width: 100%;"><span class="fa fa-play"></span></a></td>
                        </tr>
                        <?php $no++; } ?>
                    </table>
                </div>

               <!--  <div class="pager_wrapper animated" data-animation="fadeInUp" data-animation-delay="600">
                    <ul class="pager clearfix">
                        <li class="prev"><a href="#">Previous</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li class="li"><a href="#">2</a></li>
                        <li class="li"><a href="#">3</a></li>
                        <li class="li"><a href="#">4</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul>
                </div> -->
            </div>
            <?php } ?>


        </div>
    </div>
    <br><br>

    <style type="text/css">
    .music_category{
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
    .music_category:hover{
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
   .music_category_active{
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
    function active_tab2(){
        $("#music_tab2").removeClass("music_category").addClass("music_category_active");
        $("#music_tab1").removeClass("music_category_active").addClass("music_category");
        $("#music_tab3").removeClass("music_category_active").addClass("music_category");

        $("#bubblingupsonglist").css("display","block");
        $("#top40").css("display","none");
        $("#newrelease").css("display","none");
    }
    function active_tab3(){
        $("#music_tab3").removeClass("music_category").addClass("music_category_active");
        $("#music_tab1").removeClass("music_category_active").addClass("music_category");
        $("#music_tab2").removeClass("music_category_active").addClass("music_category");

        $("#newrelease").css("display","block");
        $("#top40").css("display","none");
        $("#bubblingupsonglist").css("display","none");
    }
    function active_tab1(){
        $("#music_tab1").removeClass("music_category").addClass("music_category_active");
        $("#music_tab2").removeClass("music_category_active").addClass("music_category");
        $("#music_tab3").removeClass("music_category_active").addClass("music_category");

        $("#top40").css("display","block");
        $("#bubblingupsonglist").css("display","none");
        $("#newrelease").css("display","none");
    }

    $(document).ready(function() {
        $("#top40").css("display","block");
        $("#bubblingupsonglist").css("display","none");
        $("#newrelease").css("display","none");
    });
</script>
