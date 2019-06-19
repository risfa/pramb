<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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




</script>
<div class="top2_wrapper" id="top2">
    <div class="container">

        <div class="top2 clearfix">

            <header>
                
                <div class="logo_wrapper visible-sm visible-xs " >
                    <a href="index.php" class="logo scroll-to">
                        <img src="images/prambors_asset/stripe.png" style="height:40px; margin-top: 20px; " alt="" class="img-responsive">
                    </a>
                </div>
                
                <div class="logo_wrapper visible-lg visible-md visible-xl " >
                    <a href="index.php" class="logo scroll-to">
                        <img src="images/prambors_asset/stripe.png" style="height:60px margin-top:5px;" alt="" class="img-responsive">
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
                <div class="navbar navbar_ navbar-default" >
                    <button id="nav" type="button" class="navbar-toggle collapsed" data-toggle="expand"
                            data-target=".navbar-collapse" onclick="myFunction()"    >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse navbar-collapse_ collapse " >
                        <ul class="nav navbar-nav sf-menu clearfix">
                            
                            <li><a href="#home"><b class="menubar_item">HOME</b></a></li>
                            <li><a href="#music"><b class="menubar_item">MUSIC</b></a></li>
                            <li><a href="#shows"><b class="menubar_item">OUR SHOWS</b></a></li>
                            <li><a href="#djs"><b class="menubar_item">Wadyabala</b></a></li>
                            <li><a href="#news"><b class="menubar_item">NEWS</b></a></li>
                            <li><a href="#event_promo"><b class="menubar_item">EVENTS & PROMO</b></a></li>
                             
                        </ul>
                    </div>
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