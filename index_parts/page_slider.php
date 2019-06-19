<?php include('streaming.php'); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

<div class="logo3_wrapper hidden-sm hidden-xs" style="
    background: yellow;
    padding: 10px;
    top: 0px;
    margin-left: 25%;
    border-radius: 0px 0px 20px 20px;
    box-shadow: 0px 0px 35px -1px rgba(102,102,102,1);">
    <a href="#home" class="logo3 scroll-to" >
        <img src="../images/prambors_asset/big logo.png" class="img-responsive " style="height: 110px; margin-top: ">
    </a>
</div>

<div id="slider_wrapper">
    <div style="background-color: #fde700; margin-top: -30px;" class="row">
        <center>
            <img src="../images/wadyabala_page_banner.jpg"  height="350px">
        </center>
    </div>
</div>

<div class="song1_wrapper" id="top3">
    <div class="container">
        <div class="song1_inner clearfix">
            <div class="song1 clearfix">
                <div class="left clearfix">
                    <figure><img src="../images/song1.jpg" alt="" height="90px" width="110px"></figure>
                    <div class="caption">
                        <div class="txt1" style="line-height: 20px;">Prambors Streaming : Desta Gina In The Morning</div>
                        <div class="txt2" style="margin-top: 10px;">
                            <div class="audio1" style="margin-top: -2px;" >
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
                      <a href="http://www.jukebox5d.com/index.php?u=1"><img src="../images/stripe_banner_jukebox.jpg" style="height:90px"></a>
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
    background:#252525;
    color:#ffc925;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
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
  -webkit-border-top-right-radius: 15px;
    -webkit-border-bottom-right-radius: 15px;
    -moz-border-radius-topright: 15px;
    -moz-border-radius-bottomright: 15px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;

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