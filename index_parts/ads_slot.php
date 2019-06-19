<?php 
	$uri = $_SERVER['REQUEST_URI'];
	$urlnya = preg_match( "/pages/",$uri);
	$datanya = mysql_fetch_array(mysql_query("SELECT * FROM ads ORDER BY id DESC"));
	// echo $urlnya;
	// echo $uri;
	if($urlnya < 1){

 ?>
<div class=" container-fluid hidden-sm hidden-xs" style="text-align: center; font-size: 80px; background: linear-gradient(to bottom, rgba(37,37,37,1) 50%, rgba(255,201,37,1) 70%, rgba(255,201,37,1) 100%); color:red;">
	<!-- ADS SLOT [1875x230px] -->
	<img src="prambors_images_assets/ads_assets/<?php echo $datanya[0] ?>.jpg" style="width: 100%; background: black">
	<!-- <img src="https://rebekahwisniewski.files.wordpress.com/2015/07/horizontal-11.png" style="width: 100%; height: 175px;"> -->
</div>

<div id="adBottom" class="hidden-lg hidden-xl hidden-md"> <img src="prambors_images_assets/ads_assets/<?php echo $datanya[0] ?>.jpg" style="height:  100%; background: black"> </div>
<style type="text/css">
	#adBottom {
		left:0;
		position: fixed;
		text-align:center;
		bottom: 0px;
		width:100%;
		z-index:999;
		background: white;
		color: red;
		height: 60px;
	}
</style>
<?php }else if($urlnya > 1){ ?>

<div class=" container-fluid hidden-sm hidden-xs" style="text-align: center; font-size: 80px; background: linear-gradient(to bottom, rgba(37,37,37,1) 50%, rgba(255,201,37,1) 70%, rgba(255,201,37,1) 100%); color:red;">
	<!-- ADS SLOT [1875x230px] -->
	<img src="../prambors_images_assets/ads_assets/<?php echo $datanya[0] ?>.jpg" style="width: 100%; background: black">
	<!-- <img src="https://rebekahwisniewski.files.wordpress.com/2015/07/horizontal-11.png" style="width: 100%; height: 175px;"> -->
</div>

<div id="adBottom" class="hidden-lg hidden-xl hidden-md"> <img src="../prambors_images_assets/ads_assets/<?php echo $datanya[0] ?>.jpg" style="height:  100%; background: black"> </div>
<style type="text/css">
	#adBottom {
		left:0;
		position: fixed;
		text-align:center;
		bottom: 0px;
		width:100%;
		z-index:999;
		background: white;
		color: red;
		height: 60px;
	}
</style>
<?php } ?>