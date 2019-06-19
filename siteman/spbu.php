<?php
// memanggil file config.php
// include "dbconnect.php";
require 'dbconnect.php';
?>
<html>
<head>
	<title>Lihat spbu luckyfriday</title>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
//EDIT 
  if(isset($_GET['edit'])){
    $sqledit = mysql_query("SELECT * FROM tb_spbu WHERE id_spbu ='$_GET[edit]'");
    $Data = mysql_fetch_array($sqledit);
    }
//DELETE
    if(isset($_GET['delete'])){
      $sqldelete = mysql_query("DELETE FROM tb_spbu WHERE id_spbu ='$_GET[delete]'");

      if($sqldelete){
        echo "<script>alert('yes')</script>";
        echo"<script>document.location.href='index.php?menu=spbu'</script>";
      }else{
        echo "<script>alert('no')</script>";
        echo"<script>document.location.href='index.php?menu=spbu'</script>";

      
    }
  }
 ?>
<body>
  <div class="row">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
    <center><h2>FORM Input SPBU</h2></center>
     <form enctype="multipart/form-data" class="form-group"  method="post" action="process/add_spbu.php" style="margin-top: 20px;">
      <input type="hidden" name="id_spbu" value="<?php echo $Data[0]?>">
            <div>

                <div id="temp_image"></div>
              <!--   <input class="form-control" type="text" name="idHadiah" placeholder="idHadiah"  required="">
                <br> -->
                <input class="form-control" type="text" name="nomor_spbu" placeholder="Nomor Spbu" required="" value="<?php echo $Data['nomor_spbu']?>">
                <br>
                <input  class="form-control" type="text" name="alamat_spbu" placeholder="Alamat Spbu" required="" value="<?php echo $Data['alamat_spbu']?>">
                <br>
                <?php if($_GET['edit']){ ?>
                <input type="submit" name="update" class="btn btn-success" value="Update">
                <a href="index.php?menu=spbu" class="btn btn-success">Batal</a>
                <?php 
                  }
                 else{ ?>
                 <input class="btn btn-success" type="submit" name="simpan" value="submitCust" method="post">
                
                <?php } ?>           
        </form> 
  </div>
  <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8"></div>
  </div>
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 50px;">
        <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>id_spbu</th>
              <th>nomor_spbu</th>
              <th>alamat_spbu</th>
              <th>edit/delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>id_spbu</th>
              <th>nomor_spbu</th>
              <th>alamat_spbu</th>
              <th>edit/delete</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $sql = mysql_query("SELECT * FROM  tb_spbu");
            while($simpan = mysql_fetch_array($sql)){
             ?>
            <tr>
              <td><?php echo $simpan['id_spbu'];?></td>
              <td><?php echo $simpan['nomor_spbu'];?></td>
              <td><?php echo $simpan['alamat_spbu'];?></td>
              <td>
                <a href="index.php?menu=spbu&edit=<?php echo $simpan['id_spbu']?>">EDIT</a>
                <a href="index.php?menu=spbu&delete=<?php echo $simpan['id_spbu']?>">DELETE</a>

              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script>
</body>
</html>