<div class="container">
    <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100">PRAMBORS MUSIC CHART</div>
    <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="200">Lorem ipsum dolor sit amet
        concateur non tropp sit namo, allegro sustenuto al prada bravo pensare, chicco milo naturo
    </div>
    <br><br><br>

    <div class="radios animated" data-animation="fadeInUp" data-animation-delay="300">
        <table id="music-chart" style="width: 100%;" class="hidden-sm hidden-xs">
            <thead>
                <tr style="color: #8c8989; font-size: 20px;">
                    <td></td>
                    <td style="width: 15%;"></td>
                    <td>Song Title</td>
                    <td>Artist</td>
                    <td>Album</td>
                    <td>Genre</td>
                    <td style="background: url(images/volume.png) center 15px no-repeat;"></td>
                </tr>
            </thead>
            <tbody>
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
                    <td><?php echo $data['song_tittle'] ?></td>
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
                

            </tbody>    
        </table>

        <!-- MOBILE USE -->
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
<div class="ads1" style="text-align: center; font-size: 80px; height: 500px;">
    ADS SLOT
<div>
