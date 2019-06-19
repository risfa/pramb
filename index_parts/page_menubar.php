<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<?php 
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    // if (strpos($a, 'are') !== false) {
    //     echo 'true';
    // }
    $position = explode("/", $actual_link);
    // echo $position[6];
?>
<script>
function myFunction() {
    var x = document.getElementById("baba");
    if (x.style.display == "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<script>
function myFunction1() {
    var x = document.getElementById("baba");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>
<div id="baba" class="baba" style="
        
        background-color:black;
        position:fixed;
        width:100%;
        height:100%;
        top:0px;
        left:0px;
        z-index:1000;
        overflow:hidden;
        display: none;
        ">

        <div class="navbar navbar_ navbar-default">
            
                   
                    
                     <img src="../images/prambors_asset/stripe.png" style="height: 60px; margin-top: 17px; margin-left: 5%; float: left;" alt="" class="img-responsive">
                             <h3> <i class="far fa-times-circle" style="color: #ffc925; margin-left: 20% " onclick="myFunction1()""></i></h3>
                     <center>
                    <div class="navbar-collapse navbar-collapse_ expand" style="margin: 0%;" >
                        <ul class="nav navbar-nav sf-menu clearfix" >
                         
                            <li class="navbar-toggle collapsed " data-toggle="expand"
                            data-target=".navbar-collapse" style="padding-top: 0%; padding-bottom: 0%; border-top: 0px solid; "><a href="../index.php#home" onclick="myFunction()" > <b class="menubar_item" style="">HOME</b></a></li>
                            <li class="navbar-toggle " data-toggle="expand"
                            data-target=".navbar-collapse " style=" border-top: 0px solid;"><a href="../index.php#music" onclick="myFunction()"><b class="menubar_item">MUSIC</b></a></li>
                            <li class="navbar-toggle collapsed " style="border-top: 0px solid;" data-toggle="expand"
                            data-target=".navbar-collapse"><a href="../index.php#shows" onclick="myFunction()"><b class="menubar_item">OUR SHOWS</b></a></li>
                            <li class="navbar-toggle collapsed " data-toggle="expand" style="border-top: 0px solid;" 
                            data-target=".navbar-collapse"><a href="../index.php#djs" onclick="myFunction()"><b class="menubar_item">Wadyabala</b></a></li>
                            <li class="navbar-toggle  " style="border-top: 0px solid;" data-toggle="expand"
                            data-target=".navbar-collapse "><a  href="../index.php#news" onclick="myFunction()"><b class="menubar_item">NEWS</b></a></li>
                            <li class="navbar-toggle " data-toggle="expand" style="border-top: 0px solid;" 
                            data-target=".navbar-collapse"><a href="../index.php#event_promo" onclick="myFunction()"><b class="menubar_item">EVENTS & PROMO</b></a></li>
                      
                        </ul>
                    </div>
                    </center>
            
                </div>

    </div>

<div class="top2_wrapper" id="top2">
    <div class="container">

        <div class="top2 clearfix">

            <header>
                <div class="logo_wrapper">
                    <a href="../index.php" class="logo scroll-to">
                        <img src="../images/prambors_asset/stripe.png" alt="" class="img-responsive" style="">
                    </a>
                </div>
            </header>

            <div class="menu_wrapper">
                <div class="add1 clearfix" style="display: none;">
                    <div class="icon-search"><a href="#"></a></div>
                    <div class="dropdown dropdown1">
                        <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true">EN
                        </button>

                    </div>
                </div>
                <div class="navbar navbar_ navbar-default">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="expand"
                            data-target=".navbar-collapse" onclick="myFunction()">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse navbar-collapse_ collapse" >
                        <ul class="nav navbar-nav sf-menu clearfix">
                            <?php 
                            echo "Linknya : ".strpos($actual_link, 'wadyabala.php');
                            if(strpos($actual_link, 'wadyabala.php') == TRUE){ ?>
                                <li class=""><a href="../index.php#home"><b class="menubar_item">Home</b></a></li>
                                <li><a href="../index.php#music"><b class="menubar_item">MUSIC</b></a></li>
                                <li><a href="../index.php#shows"><b class="menubar_item">OUR SHOWS</b></a></li>
                                <li class="active"><a href="#"><b class="menubar_item">Wadyabala</b></a></li>
                                <li><a href="../index.php#news"><b class="menubar_item">NEWS</b></a></li>
                                <li><a href="../index.php#event_promo"><b class="menubar_item">EVENTS & PROMO</b></a></li>
                            <?php }else if($position[6] == 'news.php'){ ?>
                                <li class=""><a href="../index.php#home"><b class="menubar_item">Home</b></a></li>
                                <li><a href="../index.php#music"><b class="menubar_item">MUSIC</b></a></li>
                                <li><a href="../index.php#shows"><b class="menubar_item">OUR SHOWS</b></a></li>
                                <li ><a href="../index.php#djs"><b class="menubar_item">Wadyabala</b></a></li>
                                <li class="active" ><a href="#"><b class="menubar_item">NEWS</b></a></li>
                                <li><a href="../index.php#event_promo"><b class="menubar_item">EVENTS & PROMO</b></a></li>
                            <?php }else if($position[6] == 'promo_news.php'){ ?>
                                <li class=""><a href="../index.php#home"><b class="menubar_item">Home</b></a></li>
                                <li><a href="../index.php#music"><b class="menubar_item">MUSIC</b></a></li>
                                <li><a href="../index.php#shows"><b class="menubar_item">OUR SHOWS</b></a></li>
                                <li ><a href="../index.php#djs"><b class="menubar_item">Wadyabala</b></a></li>
                                <li class="" ><a href="../index.php#news"><b class="menubar_item">NEWS</b></a></li>
                                <li class="active"><a href="#"><b class="menubar_item">EVENTS & PROMO</b></a></li>
                            <?php }else if(strcmp($position[6],'news_details.php') > 1){ ?>
                                <li class=""><a href="../index.php#home"><b class="menubar_item">Home</b></a></li>
                                <li><a href="../index.php#music"><b class="menubar_item">MUSIC</b></a></li>
                                <li><a href="../index.php#shows"><b class="menubar_item">OUR SHOWS</b></a></li>
                                <li ><a href="../index.php#djs"><b class="menubar_item">Wadyabala</b></a></li>
                                <li class="active" ><a href="#"><b class="menubar_item">NEWS</b></a></li>
                                <li><a href="../index.php#event_promo"><b class="menubar_item">EVENTS & PROMO</b></a></li>
                            <?php }else if(strcmp($position[6],'news.php') > 1){ ?>
                                <li class=""><a href="../index.php#home"><b class="menubar_item">Home</b></a></li>
                                <li><a href="../index.php#music"><b class="menubar_item">MUSIC</b></a></li>
                                <li><a href="../index.php#shows"><b class="menubar_item">OUR SHOWS</b></a></li>
                                <li ><a href="../index.php#djs"><b class="menubar_item">Wadyabala</b></a></li>
                                <li class="active" ><a href="#"><b class="menubar_item">NEWS</b></a></li>
                                <li><a href="../index.php#event_promo"><b class="menubar_item">EVENTS & PROMO</b></a></li>
                            <?php }else if(strcmp($position[6],'index.php') > 1){ ?>
                                <li class=""><a href="../index.php#home"><b class="menubar_item">Home</b></a></li>
                                <li><a href="../index.php#music"><b class="menubar_item">MUSIC</b></a></li>
                                <li><a href="../index.php#shows"><b class="menubar_item">OUR SHOWS</b></a></li>
                                <li ><a href="../index.php#djs"><b class="menubar_item">Wadyabala</b></a></li>
                                <li class="" ><a href="../index.php#news"><b class="menubar_item">NEWS</b></a></li>
                                <li><a href="../index.php#event_promo"><b class="menubar_item">EVENTS & PROMO</b></a></li>

                            <?php }else{ ?>
                                <li><?php echo $position[6].strcmp($position[6],'news_details.php'); ?></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
                 


        </div>

    </div>
</div>
<style type="text/css">
    .menubar_item:hover{
        color: #ffc925;
        transition: 0.5s;
    }
    
</style>

