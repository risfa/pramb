<!doctype html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://w3bits.com/wp-content/themes/bits-v2/labs.css">
<script>var script = function(src) {
    var e = document.createElement('script');
    e.async = true;
    e.src = src;
    document.getElementsByTagName('head')[0].appendChild(e);
};

var style = function(css) {
    var e = document.createElement('style');
    if(e.styleSheet){
        e.styleSheet.cssText = css;
    } else {
        e.appendChild(document.createTextNode(css));
    }
    document.getElementsByTagName('head')[0].appendChild(e);
}

var toggleDisplay=function(el,display,class_el){
    var EL=document.querySelector(el);
    if(EL.style.display==display){
        EL.style.display="none";
        if(class_el)EL.classList.add(class_el);
    }else{
        EL.style.display=display;
        if(class_el)EL.classList.add(class_el);
    }
};

</script>

<style>body {
  background: #252525;
  color: #465665;
}

img {
  max-width: 100%;
  vertical-align: bottom;
}

.wrapper {
  width: 100%;
  padding: 1em;
}

.title {
  font-weight: 700;
}

.desc {
  font-size: 1em;
  font-style: italic;
  font-family: Georgia, serif;
}

.title,
.desc,
.intro {
  text-align: center;
}

a {
  color: #5b7083;
  -moz-transition: all .25s ease-in-out;
  -webkit-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out;
}

.intro {
  margin: 1.75em 0 .75em;
  border-bottom: 3px double rgba(0, 0, 0, 0.05);
  margin-bottom: 1.75em;
}
.intro a {
  opacity: .7;
}
.intro a:hover {
  opacity: 1;
}
.intro h3 {
  font-size: .825em;
  font-weight: 700;
  text-transform: uppercase;
  display: inline-block;
  margin: .25em .75em .75em;
}
.intro h3 a {
  font-weight: 400;
}

.back-to-article {
  font-weight: 700;
  display: block;
  margin: 2em 0 0;
  padding: 1.25em;
  text-align: center;
  color: #CAD0DC;
  border: 3px solid #D1D8DE;
}
.back-to-article:hover {
  color: #465665;
  border-color: #5b7083;
}

.masonry {
  -moz-transition: all .5s ease-in-out;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -moz-column-gap: 30px;
  -webkit-column-gap: 30px;
  column-gap: 30px;
  -moz-column-fill: initial;
  -webkit-column-fill: initial;
  column-fill: initial;
}
.masonry .brick {
  margin-bottom: 30px;
}
.masonry .brick img {
  -moz-transition: all .5s ease-in-out;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
.masonry .brick:hover img {
  opacity: .75;
}
.masonry.bordered {
  -moz-column-rule: 1px solid #eee;
  -webkit-column-rule: 1px solid #eee;
  column-rule: 1px solid #eee;
  -moz-column-gap: 50px;
  -webkit-column-gap: 50px;
  column-gap: 50px;
}
.masonry.bordered .brick {
  padding-bottom: 25px;
  margin-bottom: 25px;
  border-bottom: 1px solid #eee;
}
.masonry.gutterless {
  -moz-column-gap: 0;
  -webkit-column-gap: 0;
  column-gap: 0;
}
.masonry.gutterless .brick {
  margin-bottom: 0;
}

.span {
  -moz-column-span: all;
  -webkit-column-span: all;
  column-span: all;
  *margin: 30px 0;
}

@media only screen and (min-width: 1024px) {
  .desc {
    font-size: 1.25em;
  }

  .intro {
    letter-spacing: 1px;
  }

  .wrapper {
    width: 100%;
    padding: 2em;
  }

  .masonry {
    -moz-column-count: 3;
    -webkit-column-count: 3;
    column-count: 3;
  }
}
@media only screen and (min-width: 768px) and (max-width: 1023px) {
  .wrapper {
    width: 100%;
    padding: 1.5em;
  }

  .masonry {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
  }
}
</style></head>
<body class="labs-template-default single single-labs postid-2409">
<div class="container">
<div class="wrapper">
<div class="bup" id="bup">
	<style>.w3bits-labs { width: 468px; height: 60px; margin: 1.5em 0 0}
@media(min-width: 728px) { .w3bits-labs { width: 728px !important; height: 90px !important; } }
@media(max-width:727px) and (min-width: 468px) { .w3bits-labs { width: 468px !important; height: 60px !important; } }
@media(max-width: 467px) and (min-width: 234px) { .w3bits-labs { width: 234px !important; height: 60px !important; } }
</style>
<!-- W3Bits Labs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">

<div class="row">
    <div class="col-md-12">
        <h1 style="color: #ffc925; font-weight: bold;">Wadyabala Crews</h1>
    </div>
</div>
<br>
</div>
		<div class="masonry">
      <?php  
        $sql = mysql_query("SELECT * FROM wadyabala_bigphoto");
        while($data = mysql_fetch_array($sql)){
      ?>
      <div class="brick">

         <a class="example-image-link" href="../prambors_images_assets/wadyabala_big_assets/<?php echo $data[0] ?>.jpg" data-lightbox="example-2" data-title="Prambors Cres"><img class="example-image" src="../prambors_images_assets/wadyabala_big_assets/<?php echo $data[0] ?>.jpg" alt="IMAGES"/></a>

        <img src="">
<!--         <font style="
            margin-top: -47px;
            position: absolute;
            margin-left: 0px;
            color: #fde700;
            background: black;
            padding: 5px;
            font-size: 19px;
            font-weight: bold;
        ">IT DIVISION</font> -->
      </div>



      <?php } ?>
     





     





  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>



		</div>

	</div>

<script type='text/javascript' src='https://w3bits.com/wp-content/themes/bits-v2/assets/js/prettify.js'></script>
<script type='text/javascript'>
prettyPrint()
</script>
</div>
</body>
</html>