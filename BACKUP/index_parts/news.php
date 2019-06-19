<div class="container">
    <br><br><br>
    <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100" style="color: black">PRAMBORS NEWS
    </div>

    <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="200">Ayo bikin diri kamu lebih up to date!</div>
</div>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php 
                $data_news_1 = mysql_fetch_array(mysql_query("SELECT * FROM news ORDER BY id_news DESC LIMIT 1 OFFSET 0 ")); 
            ?>
            <div class="post post-short">
                <div class="post-header">
                    <div class="post-image">
                        <img src="images/post02.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="post-story">
                    <div class="post-story-body clearfix">
                        <p class="txt1" >
                            <font style="font-size: 40px"><?php echo $data_news_1[1] ?></font><br>
                            <?php echo substr($data_news_1[1],0,370)." ..." ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            
            <?php 
                $sql = mysql_query("SELECT * FROM news ORDER BY id_news DESC LIMIT 4 OFFSET 1"); 
                    while($news_data = mysql_fetch_array($sql)){
            ?>

            <div class="latest1">
                <a href="#" class="clearfix">
                    <figure><img src="images/latest01.jpg" alt=""  style="height: 100px;"></figure>
                    <div class="caption">
                        <div class="txt1"><font style="font-size: 20px"><?php echo $news_data[1] ?></font><br> 
                            <?php echo substr($news_data[2],0,130)." ..."; ?>
                        </div>
                        <div class="txt2"><?php echo $news_data[5] ?></div>
                    </div>
                </a>
            </div>

            <?php } ?>
            
        </div>   

        <div class="row">
            <div class="col-md-12">
                <div style="float: right;">
                    <a href="#" class="btn-default btn3 animated fadeInDown blink" style="color: black; background: url(images/arr2.png) right center no-repeat">READ MORE NEWS</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>