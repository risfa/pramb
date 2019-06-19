    <br><br><br>
    <div class="container">
        <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100" style="color: white">EVENTS & PROMO</div>
        <br><br>

        <div class="row">
            <div class="col-md-4">
                <div id="promo_tab1"  class="promo_category_active" onclick="active_promo_tab1()">EVENTS</div>
            </div>
            <div class="col-md-4">
                <div id="promo_tab2"  class="promo_category" onclick="active_promo_tab2()">PROMO</div>
            </div>
            <div class="col-md-4">
                <div id="promo_tab3"  class="promo_category" onclick="active_promo_tab3()">WINNER ANNOUNCEMENT&nbsp;<i class="fa fa-trophy"></i></div>
            </div>
        </div>


        <br><br>
        
        <?php 
            $arr = array('event', 'promo', 'winner');
            foreach ($arr as &$value) {
                // echo $value."<br>";
        ?>
        <div id="<?php echo $value ?>">
            <div class="thumb6 animated fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="200">
                <div class="thumbnail clearfix"  style="background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%); color: black">
                    <figure class="">
                        <img src="images/style07.jpg" alt="" class="img-responsive">
                    </figure>

                    <div class="caption">
                        <div class="title">HEADER TEXT is the Best Solution</div>
                        <p style="color: black;">
                            Etiam pharetra ut ante eget efficitur. Nullam quis felis at nunc vehicula sollic itudin ut
                            ex. Maecenas eget volutpat turpis. Praesent dapibus eleifend augue, eget sollicitudin velit
                            malesuada eu. Aliquam blandit, diam venenatis feugiat, tellus odio malesuada ex, eu luctus
                            lectus nibh et velit.Ut a maignay eros commodo condimentum quis vitae augue. Fusce venenatis
                            imperdieted arcu eget viverra. Maecenas id risus mollis, blandit mi a, maximus leo ulla id
                            risus mollisfeugiat felis.
                        </p>
                    </div>
                </div>
            </div>

            <div class="thumb6 right animated fadeInRight visible" data-animation="fadeInRight" data-animation-delay="200">
                <div class="thumbnail clearfix"  style="background: radial-gradient(ellipse at center, rgba(253,243,47,1) 0%, rgba(255,201,37,1) 100%); color: black">
                    <figure class="">
                        <img src="images/rad.jpg" alt="" class="img-responsive">
                    </figure>

                    <div class="caption" >
                        <div class="title">HEADER TEXT and Smooth Works</div>
                        <p style="color: black;">
                            Etiam pharetra ut ante eget efficitur. Nullam quis felis at nunc vehicula sollic itudin ut
                            ex. Maecenas eget volutpat turpis. Praesent dapibus eleifend augue, eget sollicitudin velit
                            malesuada eu. Aliquam blandit, diam venenatis feugiat, tellus odio malesuada ex, eu luctus
                            lectus nibh et velit.Ut a maignay eros commodo condimentum quis vitae augue. Fusce venenatis
                            imperdieted arcu eget viverra. Maecenas id risus mollis, blandit mi a, maximus leo ulla id
                            risus mollisfeugiat felis.
                        </p>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12">
                    <div style="float: right;">
                        <a href="#" class="btn-default btn3 animated fadeInDown">READ ANOTHER SURPRISE</a>
                    </div>
                </div>
            </div>

        </div>
        <?php } ?>
    </div>

    <style type="text/css">
        .promo_category{
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
        .promo_category:hover{
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
        .promo_category_active{
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
        function active_promo_tab2(){
            $("#promo_tab2").removeClass("promo_category").addClass("promo_category_active");
            $("#promo_tab1").removeClass("promo_category_active").addClass("promo_category");
            $("#promo_tab3").removeClass("promo_category_active").addClass("promo_category");

            $("#promo").css("display","block");
            $("#event").css("display","none");
            $("#winner").css("display","none");
        }
        function active_promo_tab3(){
            $("#promo_tab3").removeClass("promo_category").addClass("promo_category_active");
            $("#promo_tab1").removeClass("promo_category_active").addClass("promo_category");
            $("#promo_tab2").removeClass("promo_category_active").addClass("promo_category");

            $("#winner").css("display","block");
            $("#event").css("display","none");
            $("#promo").css("display","none");
        }
        function active_promo_tab1(){
            $("#promo_tab1").removeClass("promo_category").addClass("promo_category_active");
            $("#promo_tab2").removeClass("promo_category_active").addClass("promo_category");
            $("#promo_tab3").removeClass("promo_category_active").addClass("promo_category");

            $("#event").css("display","block");
            $("#promo").css("display","none");
            $("#winner").css("display","none");
        }

        $(document).ready(function() {
            $("#promo").css("display","none");
            $("#winner").css("display","none");
        });
    </script>


    <!-- END -->

<br><br><br>
