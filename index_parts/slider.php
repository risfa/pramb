
<?php include('streaming.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -30px;">
    <!-- Indicators -->
    <ol style="display: none;" class="carousel-indicators">

      <li data-target="#myCarousel" data-slide-to="0"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	 </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <?php 
    	$datapertama = mysql_fetch_array(mysql_query("SELECT * FROM bannerSlider ORDER BY idBanner DESC LIMIT 1,1 "));
     ?>
      <div class="item active">
		<img class="test" style="width:100%;" src="prambors_images_assets/slider_assets/<?php echo $datapertama[0] ?>.jpg">
      </div>

		<?php  
			$sql = mysql_query("SELECT * FROM bannerSlider ORDER BY idBanner ASC LIMIT 9999999 OFFSET 1");
			while($data = mysql_fetch_array($sql)){
		?>
      <div class="item">
		<img class="test" style="width:100%;" src="prambors_images_assets/slider_assets/<?php echo $data[0] ?>.jpg">
      </div>
      <?php } ?>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 </div>

<div class="song1_wrapper" id="top3">
	<div class="container">
		<div class="song1_inner clearfix">
			<div class="song1 clearfix">
				<div class="left clearfix">
					<figure><img id="img-src" src="" alt="" height="90px" width="110px"></figure>
					<div class="caption">
						<div id="list-lagu" class="txt1" style="line-height: 20px;"></div>
						<div class="txt2">
							<div class="audio1" style="margin-top: 2px;" >
								<button  onclick="playVid()" type="button" id="buttonPlay" class="btn" style="background: none; border: #ffc925 solid 1px; "><font style="color:#ffc925" class="fa fa-play"></font></button>

								<button onclick="pauseVid()" id="buttonPause" type="button" class="btn" style="background: none; border: #ffc925 solid 1px; display: none; "><font style="color:#ffc925" class="fa fa-pause" ></font></button>

								<button type="button" class="btn" style="background: none; display: none; border: #ffc925 solid 1px; "><font style="color:#ffc925"  class="fa fa-volume-up"></font></button>
									<select class="form-control" style="max-width: 18%; float: left; margin-right: 3px; background:none; color: #ffc925; border: #ffc925 1px solid;" onchange="matikan_semua()" id="stationlist">
										<option value="jakarta">Jakarta</option>
										<option value="bandung">Bandung</option>
										<option value="makassar">Makassar</option>
										<option value="medan">Medan</option>
										<option value="semarang">Semarang</option>
										<option value="solo">Solo</option>
										<option value="surabaya">Surabaya</option>
										<option value="yogyakarta">Yogyakarta</option>
										<option value="manado">Manado</option>
									</select>


							</div>
						</div>
					</div>

					
				</div>
				<div class="right" style="background: black;">
					<center>
						<a href="http://www.jukebox5d.com/index.php?u=1"><img src="images/stripe_banner_jukebox.jpg" style="height:90px"></a>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.dropdown-menu > li > a:hover {
    background-color: #ffc925;
}

select option {
	margin-left: 10px;
    background:#252525;
    color:#ffc925;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
    border: #ffc925 1px solid;
    border-radius: 10px;
}

select {

  /* make arrow and background */

  background:
    linear-gradient(45deg, transparent 50%, blue 50%),
    linear-gradient(135deg, blue 50%, transparent 50%),
    linear-gradient(to right, skyblue, skyblue);
  background-position:
    calc(100% - 21px) calc(1em + 2px),
    calc(100% - 16px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;

  /* styling and reset */

  border: thin solid blue;
  font: 300 1em/100% "Helvetica Neue", Arial, sans-serif;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  border-radius: 0;
  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance:none;
  -moz-appearance:none;
}
</style>
<script type="text/javascript">
	// $.get("http://streaming.pramborsfm.com/api/playouthistory?stationId=masima-pramborsjakarta", function(data, status){
 //        console.log("Data: " + data + "\nStatus: " + status);
 //    });
getKota();
setInterval("getKota()",60000);// 5000

function getKota(value){

 $.ajax({
      url: "https://crossorigin.me/http://streaming.pramborsfm.com/api/playouthistory?stationId=masima-pramborsjakarta",
      type: "GET",
      success: function (data) {

      	console.log(data);
      		if (data == null||data=='') { 
      			$('#list-lagu').html("PrambosFM");
      			    $('#img-src').attr("src","images/prambors_asset/big logo.png"); 			

      		}else{

		      	$.each(data, function( index, value ) {
		      	 	if (index == 0) {
		      	 		// console.log(value.song.track);
		      	 		$('#list-lagu').html(value.song.artist+'-'+value.song.track);
		      	 		$('#img-src').attr("src",value.song.coverUrl);  



		      	 	}


     
				});
      		}
      },
      xhrFields: {
        withCredentials: false
      }
    });

}





</script>
