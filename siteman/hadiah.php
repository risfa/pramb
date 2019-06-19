<?php
// memanggil file config.php
// include "dbconnect.php";
require 'dbconnect.php';
?>
<html>                                                                                                                                                                                                                                                                                              
<head>
	<title>Lihat hadiah luckyfriday</title>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
</head>
<?php 
//EDIT
if(isset($_GET['edit'])){
    $sqledit = mysql_query("SELECT * FROM tb_hadiah WHERE id_hadiah='$_GET[edit]'");
    $Data = mysql_fetch_array($sqledit);
}

//DELETE
if(isset($_GET['delete'])){
    $sqldelete = mysql_query("DELETE FROM tb_hadiah WHERE id_hadiah='$_GET[delete]'");
    if($sqldelete){
      echo "<script>alert('Berhasil')</script>";
      echo "<script>document.location.href='index.php?menu=hadiah'</script>";
  }else{
      echo "<script>alert('tidak berhasil')</script>";
      echo "<script>document.location.href='index.php?menu=hadiah'</script>";
  }
}

?>
<body>
    <div class="container">
      <div class="row">

          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">

            <center><h2>FORM Input Hadiah</h2></center>

                <div>  
            <form enctype="multipart/form-data" class="form-group"  method="post" action="process/add_hadiah.php">
                <input type="hidden" name="id_hadiah" value="<?php echo $Data[0]?>">

                    <div id="temp_image"></div>
                    <!--  <input class="form-control" type="text" name="idHadiah" placeholder="id_hadiah"  required=""> -->
                    <br>
                    <input class="form-control" type="text" name="nama_hadiah" placeholder="nama hadiah"  required="" value="<?php echo $Data['nama_hadiah']?>">
                    <br>
                    <input class="form-control" type="text" name="jumlah_hadiah" placeholder="Jumlah Hadiah" required="" value="<?php echo $Data['jumlah_hadiah']?>">
                    <br>
                    <input  class="form-control" type="text" name="prosentase_menang" placeholder="ProsentasiMenang" required="" value="<?php echo $Data['prosentase_menang']?>">
                    <br>
                    <select name="kategori_hadiah" class="form-control" value="<?php echo $Data['kategori_hadiah']?>" >
                        <option value="0">Kategori</option>
                        <option value="1">Mobil</option>
                        <option value="2">Motor</option>
                        <option value="3">Umum</option>
                    </select>
                    <br>
                        <select name="status_hadiah" class="form-control" value="<?php echo $Data['status_hadiah']?>">
                            <option>Status Hadiah</option>
                            <option value="1">Active</option>
                            <option value="2">Deactive</option>
                        </select>
                    <br>
                   <input class="form-control" type="text"  name="hadiah_spesial" required="" placeholder="HadiahSpesial" value="<?php echo $Data['hadiah_spesial']?>">
                   <br>
                   <?php if($_GET['edit']){ ?>
                   <input type="submit" name="update" class="btn btn-success" value="Update">
                   <a href="index.php?menu=hadiah" class="btn btn-success">Batal</a>
                    <?php 
                        }
                     else{ ?>
                    <input class="btn btn-success" type="submit" name="simpan" value="submit" method="post">
                    <?php } ?>
                
                </form>
                </div> 
                <br>
                <br>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9" style="margin-top: 40px;">    
              
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id_hadiah</th>
                    <th>nama_hadiah</th>
                    <th>jumlah_hadiah</th>
                    <th>prosentase_menang</th>
                    <th>status_hadiah</th>
                    <th>kategori_hadiah</th>
                    <th>hadiah_spesial</th>
                    <th>id_spbu</th>
                    <th>delete/edit</th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id_hadiah</th>
                    <th>nama_hadiah</th>
                    <th>jumlah_hadiah</th>
                    <th>prosentase_menang</th>
                    <th>status_hadiah</th>
                    <th>kategori_hadiah</th>
                    <th>hadiah_spesial</th>
                    <th>id_spbu</th>
                    <th>delete/edit</th>
                    <
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = mysql_query("SELECT * FROM  tb_hadiah as tbh JOIN tb_spbu as tbs ON tbs.id_spbu = tbh.id_spbu ");
                while($query = mysql_fetch_array($sql)){

                ?>

                <tr>
                    <td><?php echo $query['id_hadiah'];?></td>
                    <td><?php echo $query['nama_hadiah'];?></td>
                    <td><?php echo $query['jumlah_hadiah'];?></td>
                    <td><?php echo $query['prosentase_menang'];?></td>
                    <td><?php echo $query['status_hadiah'];?></td>
                    <td><?php echo $query['kategori_hadiah'];?></td>
                    <td><?php echo $query['hadiah_spesial'];?></td>
                    <td><?php echo $query['id_spbu'];?></td>
                    <td>
                        <a href="index.php?menu=hadiah&edit=<?php echo $query['id_hadiah']?>">EDIT</a>
                        <a href="index.php?menu=hadiah&delete=<?php echo $query['id_hadiah']?>">DELETE</a></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>


<script>
    $(document).ready(function() {
       $('#example').DataTable();
   } );

</script>


</div>
</div>
</div>

</body>
</html>