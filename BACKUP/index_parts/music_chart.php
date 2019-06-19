<div id="music">
    <div class="container">
        <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100">PRAMBORS MUSIC CHART</div>
        <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="200">Dengarkan lagu-lagu hits pilihan Prambors</div>
        <div class="row">
            <br>
            <div class="col-md-4">
                <div id="music_tab1"  class="music_category_active" onclick="active_tab1()">bubbling UP song</div>
            </div>
            <div class="col-md-4">
                <div id="music_tab2"  class="music_category" onclick="active_tab2()">TOP 40</div>
            </div>
            <div class="col-md-4">
                <div id="music_tab3"  class="music_category" onclick="active_tab3()">NEW RELEASE</div>
            </div>
        </div>
        <br><br><br>
        
        <?php 
            $arr = array('bubblingupsonglist', 'top40', 'newrelease');
            foreach ($arr as &$value) {
                // echo $value."<br>";
        ?>
        <div id="<?php echo $value ?>">
            <div class="radios animated" data-animation="fadeInLeft" data-animation-delay="300">
                <table id="music-chart" style="width: 100%;" class="hidden-sm hidden-xs">
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
                        $sql = mysql_query("SELECT * FROM music_chart");
                        while($data = mysql_fetch_array($sql)){
                     ?>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="images/albumart.jpg" style="height: 70px; width:70px; float: left;">
                                <div style="float: left; margin-top: ">
                                    <font class="fa fa-sort-asc" style="font-size: 40px; color: #35d27b;margin-top: 22px;margin-left: 10px;"></font>
                                </div>
                            </td>
                            <td><?php  echo $data['song_tittle'] ?></td>
                            <td><?php echo $data['artist'] ?></td>
                            <td><?php echo $data['album'] ?></td>
                            <td><?php echo $data['genre'] ?></td>
                            <td>
                                <button type="button" class="btn  chartbutton" style="background:#ffc925; width: 100%;"><span class="fa fa-play"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7"><hr></td>   
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <div class="radios animated" data-animation="fadeInUp" data-animation-delay="300">
                <table id="music-chart" style="width: 100%;" class="hidden-xl hidden-lg hidden-md">
                 <?php 
                    $sql = mysql_query("SELECT * FROM music_chart");
                    while($data = mysql_fetch_array($sql)){
                 ?>
                    <tr>
                        <th rowspan="4" style="width: 10%;">
                            <font style="float: left;">1</font>
                            <div style="float: right; margin-top: ">
                                <font class="fa fa-sort-asc" style="font-size: 40px; color: #35d27b;"></font>
                            </div>
                        </th>
                        <th rowspan="4" style="width:1%;">
                            <img src="images/albumart.jpg" style="height: 130px; width:130px; padding: 6px;">
                        </th>
                        <th><?php echo $data['song_tittle'] ?></th>
                    </tr>
                    <tr>
                        <td><?php echo $data['artist'] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $data['album'] ?> - <?php echo $data['genre'] ?></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn  chartbutton" style="background:#ffc925; width: 100%;"><span class="fa fa-play"></span></button></td>
                    </tr>
                <?php } ?>
                </table>
            </div>

            <div class="pager_wrapper animated" data-animation="fadeInUp" data-animation-delay="600">
                <ul class="pager clearfix">
                    <li class="prev"><a href="#">Previous</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li class="li"><a href="#">2</a></li>
                    <li class="li"><a href="#">3</a></li>
                    <li class="li"><a href="#">4</a></li>
                    <li class="next"><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
        <?php } ?>


    </div>
</div>

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

        $("#top40").css("display","block");
        $("#bubblingupsonglist").css("display","none");
        $("#newrelease").css("display","none");
    }
    function active_tab3(){
        $("#music_tab3").removeClass("music_category").addClass("music_category_active");
        $("#music_tab1").removeClass("music_category_active").addClass("music_category");
        $("#music_tab2").removeClass("music_category_active").addClass("music_category");

        $("#newrelease").css("display","block");
        $("#bubblingupsonglist").css("display","none");
        $("#top40").css("display","none");
    }
    function active_tab1(){
        $("#music_tab1").removeClass("music_category").addClass("music_category_active");
        $("#music_tab2").removeClass("music_category_active").addClass("music_category");
        $("#music_tab3").removeClass("music_category_active").addClass("music_category");

        $("#bubblingupsonglist").css("display","block");
        $("#top40").css("display","none");
        $("#newrelease").css("display","none");
    }

    $(document).ready(function() {
        $("#top40").css("display","none");
        $("#newrelease").css("display","none");
    });
</script>
