<?php 

session_start();

?>
<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php?menu=home">Prambors CMS</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Front Content <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li <?php if($_GET['menu']=='listing_streaming'){?> class="active" <?php } ?>><a href="index.php?menu=listing_streaming">Listing Streaming</a></li>

      <li <?php if($_GET['menu']=='banner_slider'){?> class="active" <?php } ?>><a href="index.php?menu=banner_slider">Banner slider</a></li>

      <li <?php if($_GET['menu']=='ads'){?> class="active" <?php } ?>><a href="index.php?menu=ads">Ads</a></li>
      
      <li <?php if($_GET['menu']=='music_chart'){?> class="active" <?php } ?>><a href="index.php?menu=music_chart">Music Chart</a></li>
      <li <?php if($_GET['menu']=='show_list'){?> class="active" <?php } ?>><a href="index.php?menu=show_list">Show List</a></li>
      <li <?php if($_GET['menu']=='wadyabala'){?> class="active" <?php } ?>><a href="index.php?menu=wadyabala">Wadyabala</a></li>
      <li <?php if($_GET['menu']=='wadyabala_big'){?> class="active" <?php } ?>><a href="index.php?menu=wadyabala_big">Wadyabala-Crews</a></li>
      <li <?php if($_GET['menu']=='epa'){?> class="active" <?php } ?>><a href="index.php?menu=epa">Ev.Pro.Ann</a></li>
  </ul>
</li>
    

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News Management <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li <?php if($_GET['menu']=='news'){?> class="active" <?php } ?>><a href="index.php?menu=news">News</a></li>
              <li <?php if($_GET['menu']=='news_category'){?> class="active" <?php } ?>><a href="index.php?menu=news_category">News Category</a></li>
          </ul>
      </li>
 




<li <?php if($_GET['menu']=='iplogs'){?> class="active" <?php } ?>><a href="index.php?menu=iplogs">Ip logs</a></li>
<li <?php if($_GET['menu']=='manage_pages'){?> class="active" <?php } ?>><a href="index.php?menu=manage_pages">Manage Pages</a></li>
<li ><a href="http://sundakelapa.jinno.id/demo/risfa/sitespy/home/login">SEO Tools</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
  <li ><a href="index.php?menu=logout">Logout <span class="sr-only">(current)</span>(<?php echo $_SESSION['nama'] ?>)</a></li>
</ul>
</div><!--/.nav-collapse -->
</div><!--/.container-fluid -->
</nav>