<?php
session_start();
?>

<?php
include('dbconnect.php');
if(!$_SESSION['username']){
  include('Login.php');
}else{
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <title>ADMIN PRAMBORS</title>
  <head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- <link rel="shortcut icon" href="http://pertamina.com/favicon.ico" type="image/x-icon" /> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
     <div class="container-fluid" style="background-color: black">
       <div class="container"> <img src="logo1.png" style="width: 15%; padding-top: 25px; padding-bottom: 25px; "></div>
     </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>

      <?php 
      include("topnav.php"); 
       ?>
    <div class="container">
      <?php
      switch ( $_GET['menu'] ) {
        case 'news':
        include('pages/news.php');
        break;
        case 'music_chart':
        include('pages/music_chart.php');
        break;
        case 'show_list':
        include('pages/show_list.php');
        break;
        case 'wadyabala':
        include('pages/wadyabala.php');
        break;
        case 'news_category':
        include('pages/news_category.php');
        break;
        case 'epa':
        include('pages/epa.php');
        break;
        case 'promo':
        include('pages/promo.php');
        break;
        case 'iplogs':
        include('pages/iplogs.php');
        break;
        case 'wadyabala_big':
        include('pages/wadyabala_big.php');
        break;

         case 'manage_pages':
        include('pages/manage_pages.php');
        break;
        
        case 'ads':
        include('pages/ads.php');
        break;

        case 'listing_streaming':
        include('pages/listing_streaming.php');
        break;

        case 'banner_slider':
        include('pages/banner_slider.php');
        break;


        

        
        case 'logout':
        session_destroy();
          echo "<script>document.location.href='index.php'</script>";
        break;
      }
    }
    ?>
  </div>
  <style type="text/css">
    body{
      background-image: url("bg4.jpg");
      background-size: 3%;
    }
  </style>
</body>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
  function test(){
                alert('test');
            }
            
</script>

</body>
<style type="text/css">
body {
  overflow-x: hidden;
  overflow-y: auto;
} 
</style>
</html>