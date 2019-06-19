 <?php
// memanggil file config.php
include "dbconnect.php";
// require 'dbconnect.php';
?>
<html>
<head>
	<!-- <title>Lihat transaksi luckyfriday</title> -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
</head>

<?php 
//EDIT
if(isset($_GET['edit'])){
    $sqledit = mysql_query("SELECT * FROM wadyabala WHERE ID='$_GET[edit]'");
    $Data = mysql_fetch_array($sqledit);
}

//DELETE
if(isset($_GET['delete'])){
    $sqldelete = mysql_query("DELETE FROM wadyabala WHERE ID='$_GET[delete]'");
    if($sqldelete){
                $filePath = "../../prambors_images_assets/wadyabala_assets/".$_GET['delete'].".jpg";


         if (file_exists($filePath)) 
               {
                    unlink($filePath);
                   "<script>alert('Picture has been Succesfully deleted!')</script>";
              }
              else
              {
                     "<script>alert('Foto tidak ada')</script>";
              }
      echo "<script>alert('Data has been Succesfully deleted!')</script>";
      echo "<script>document.location.href='index.php?menu=wadyabala'</script>";
  }else{
      echo "<script>alert('Gagal Delete')</script>";
      echo "<script>document.location.href='index.php?menu=wadyabala'</script>";
  }
}

?>



<body>
	
    <div class="row">
    <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  id="datanya" >
            <button class="btn btn-success" onclick="hide_table()">ADD DATA</button><br>
<br><br>
	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Location</th>
                <th>Description</th>
                <th>Catagory</th>
                <th>Images</th>
                  <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `wadyabala` ";
        $query = mysql_query($sql);

        while ($row = mysql_fetch_array($query)){


    // $data_spbu = mysql_fetch_array(mysql_query("SELECT * FROM tb_spbu WHERE id_spbu = '$row[id_spbu]'"));
    // $data_customer = mysql_fetch_array(mysql_query("SELECT * FROM tb_customer WHERE id_customer = '$row[id_customer]'"));

        ?>

        	<tr>
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['jabatan'];?></td>
                <td><?php echo $row['lokasi'];?></td>
                <td><?php echo $row['keterangan'];?></td>
                <td><?php echo $row['kategori'];?></td>
                <!-- <td><pre><?php $temp = explode("/>", $row['post_content']);
                	 echo substr($temp[1],0,180); 
                ?></pre></td>  -->

                <?php
                    $filename = "../prambors_images_assets/wadyabala_assets/".$row['ID'].".jpg";
                            if (!file_exists($filename)) {
                                

                ?>

                <td><a target="blank" href="../prambors_images_assets/wadyabala_assets/if_foto_kosong.jpg"><img style="height: 50px; width:50px;" src="../prambors_images_assets/wadyabala_assets/if_foto_kosong.jpg"></a></td>
                <td>

                    <?php

                            }else{
                                ?>
                <td><a target="blank" href="../prambors_images_assets/wadyabala_assets/<?php echo $row['ID'];?>.jpg"><img style="height: 50px; width:50px;" src="../prambors_images_assets/wadyabala_assets/<?php echo $row['ID'];?>.jpg"></a></td>
                <td>

                            <?php
                            }
                    ?>
                        <a href="index.php?menu=wadyabala&edit=<?php echo $row['ID']?>"><i class="fa fa-pencil"></i>&nbsp;</a> |
                        <a href="index.php?menu=wadyabala&delete=<?php echo $row['ID']?>"><i class="fa fa-trash"></i>&nbsp;</a></td>

        	</tr>

        <?php } ?>
        </tbody>
    </table>
    </div>
    </div>




    <div class="container" >
      <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="formnya" style="display: none;">
           
            <center><h2>FORM Input Wadyabala</h2></center>

                <div>  
            <form enctype="multipart/form-data" class="form-group"  method="post" action="process/add_wadyabala.php">
                <!-- <input  name="id_hadiah" value="<?php echo $Data[0]?>"> -->

                    <div id="temp_image"></div>
                     <input  type="hidden" class="form-control" type="text"  value="<?php echo $Data['ID']?>" name="ID" placeholder="ID" >
                    <br>
                    <div class="col-md-6-md-12">
                        <div class="col-md-6">
                            <label>Name</label>
                             <input class="form-control md-6" type="text" name="nama" placeholder="Name"  required="" value="<?php echo $Data['nama']?>">
                             <br>
                             <label>Location</label>
                     <input class="form-control md-6" type="text" name="lokasi" placeholder="Location"  required="" value="<?php echo $Data['lokasi']?>">
                    <br>
                    <br>
                    <label>Description</label>
                     <input class="form-control md-6" type="text" name="keterangan" placeholder="Description"  required="" value="<?php echo $Data['keterangan']?>">
                    <br>
                    <br>
                    <label>Category</label>
                     <input class="form-control md-6" type="text" name="kategori" placeholder="Category"  required="" value="<?php echo $Data['kategori']?>">
                    <br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                     <?php if($_GET['edit']){ ?>
                   <input type="submit" name="update" class="btn btn-success" value="UPDATE">
                   <a href="index.php?menu=wadyabala" class="btn btn-danger">CANCEL</a>
                    <?php 
                        }
                     else{ ?>
                    <input class="btn btn-success" type="submit" name="simpan" value="SAVE" method="post">
                    <a href="index.php?menu=wadyabala" class="btn btn-danger">CANCEL</a>
                    <?php } ?>


                        </div>
                        <div class="col-md-6">
                            <label>Job</label>
                        <select name="jabatan" class="form-control" value="<?php echo $Data['jabatan']?>" >
                            <option value="Announcer">Announcer</option>
                            <option value="Crew">Crew</option>
                         </select>
                        </div>
                    </div>
                    <br><br>
                   

                   


                 <!--    <input  class="form-control" type="text" name="prosentase_menang" placeholder="ProsentasiMenang" required="" value="<?php echo $Data['prosentase_menang']?>">
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
                   <input class="form-control" type="text"  name="hadiah_spesial" required="" placeholder="HadiahSpesial" value="<?php echo $Data['hadiah_spesial']?>"> -->
                   <br>
                  
                
                </form>
                <!-- this is how to show form -->
                                    <?php

                                    if($_GET['edit']){
                                          echo "<script>     function hide_table(){".

                            "document.getElementById('formnya').style.display = 'block';".
                            "document.getElementById('datanya').style.display = 'none';};</script>";

                        echo "<script>".
                        "hide_table();".
                        // "document.getElementById('button_tambah').click();".
                        "</script>";
                        
                                    }
                                          
                                     ?>

                                      <!-- end -->
                </div> 
                <br>
                <br>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9" style="margin-top: 40px;">    
              
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

<script type="text/javascript">
    function hide_form(){
        document.getElementById("formnya").style.display = "none";
        document.getElementById("datanya").style.display = "block";
        // $('#').style.display="none";
        // $('#').style.display="block";
    }
    function hide_table(){

        document.getElementById("formnya").style.display = "block";
        document.getElementById("datanya").style.display = "none";
        // $('#formnya').style.display="block";
        // $('#datanya').style.display="none";
    }
</script>