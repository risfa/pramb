<!-- <?php
// memanggil file config.php
include "dbconnect.php";
// require 'dbconnect.php';
?> -->
<html>
<head>

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
    $sqledit = mysql_query("SELECT * FROM show_list WHERE id_show='$_GET[edit]'");
    $Data = mysql_fetch_array($sqledit);
}

//DELETE
if(isset($_GET['delete'])){
    $sqldelete = mysql_query("DELETE FROM show_list WHERE id_show='$_GET[delete]'");
    if($sqldelete){
      echo "<script>alert('Data has been Succesfully deleted!')</script>";
      echo "<script>document.location.href='index.php?menu=show_list'</script>";
  }else{
      echo "<script>alert('Gagal Delete')</script>";
      echo "<script>document.location.href='index.php?menu=show_list'</script>";
  }
}

?>



<body>
    
    <div class="row">
    <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  id="datanya" >
            <button class="btn btn-success" onclick="hide_table()">ADD DATA</button><br>
<br>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <!-- <th>Kode TRX</th> -->
                <th>ID</th>
                <th>Show Name</th>
                <!-- <th>post_content</th> -->
                <th>Showtimes 1</th>
                <th>Showtimes 2</th>
                <!-- <th>Hari</th>> -->
                <th>Date</th>
                <th>Images</th>
                  <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `show_list` ";
        $query = mysql_query($sql);

        while ($row = mysql_fetch_array($query)){


    // $data_spbu = mysql_fetch_array(mysql_query("SELECT * FROM tb_spbu WHERE id_spbu = '$row[id_spbu]'"));
    // $data_customer = mysql_fetch_array(mysql_query("SELECT * FROM tb_customer WHERE id_customer = '$row[id_customer]'"));

        ?>

            <tr>
                <td><?php echo $row['id_show'];?></td>
                <td><?php echo $row['nama_show'];?></td>
                <td><?php echo $row['jam_tayang'];?></td>
                <td><?php echo $row['jam_tayang2'];?></td>

                <!-- <td><?php echo $row['Hari'];?></td> -->
                <td><?php echo $row['timestamp'];?></td>
                <!-- <td><pre><?php $temp = explode("/>", $row['post_content']);
                     echo substr($temp[1],0,180); 
                ?></pre></td>  -->

                <td><a target="blank" href="../prambors_images_assets/show_list_assets/<?php echo $row['id_show'];?>.jpg"><img style="height: 50px; width:50px;" src="../prambors_images_assets/show_list_assets/<?php echo $row['id_show'];?>.jpg"></a></td>
                <td>
                       <a href="index.php?menu=show_list&edit=<?php echo $row['id_show']?>"><i class="fa fa-pencil"></i>&nbsp;</a> |
                       <a href="index.php?menu=show_list&delete=<?php echo $row['id_show']?>"><i class="fa fa-trash"></i>&nbsp;</a></td>

            </tr>

        <?php } ?>
        </tbody>
    </table>
    </div>
    </div>




    <div class="container" >
      <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="formnya" style="display: none;">
            <center><h2>FORM Input Show List</h2></center>

                <div>  
            <form enctype="multipart/form-data" class="form-group"  method="post" action="process/add_show_list.php">
                <!-- <input  name="id_hadiah" value="<?php echo $Data[0]?>"> -->

                    <div id="temp_image"></div>
                     <input  type="hidden" class="form-control" type="text"  value="<?php echo $Data['id_show']?>" name="ID" placeholder="ID" >
                    <br>
                    <div class="col-md-12">
<!--                         <div class="col-md-6">
                             <input class="form-control md-6" type="text" name="song_tittle" placeholder="song_tittle"  required="" value="<?php echo $Data['song_tittle']?>">

                             <input class="form-control md-6" type="text" name="artist" placeholder="artist"  required="" value="<?php echo $Data['artist']?>">

                             <input class="form-control md-6" type="text" name="album" placeholder="album"  required="" value="<?php echo $Data['album']?>">
                        </div> -->
                   <!--      <div class="col-md-6">
                        <select name="category" class="form-control" value="<?php echo $Data['category']?>" >
                            <option value="bublingup">Bubbling up song</option>
                            <option value="top40">Top40</option>
                            <option value="newrelease">NewRelease</option>
                         </select>
                        </div> -->
          <!--           </div> -->
                    <br><br>
                   

                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                        <label>Show Name</label>
                     <input class="form-control md-6" type="text" name="nama_show" placeholder="Show Name"  required="" value="<?php echo $Data['nama_show']?>">
                     <br>
                     <label>Time</label>

                     <input class=" form-control"  type="text" name="jam_tayang" style="float:left; max-width: 100%;" placeholder="Monday-Sunday 07:00 - 08:00"  required="" value="<?php echo $Data['jam_tayang']?>" >
                    <!-- <select name="Hari" class="form-control" placeho style="max-width: 30%;">               
                           <option value="Monday">Monday</option>
                           <option value="Tuesday">Tuesday</option>
                           <option value="Wednesday">Wednesday</option>
                           <option value="Thursday">Thursday</option>
                           <option value="Friday">Friday</option>
                           <option value="Saturday">Saturday</option>
                           <option value="Sunday">Sunday</option>
                    </select> -->
                <br>

                     <input class=" form-control"  type="text" name="jam_tayang2" style="float:left; max-width: 100%;" placeholder="Monday-Sunday 07:00 - 08:00"  value="<?php echo $Data['jam_tayang2']?>" >
                    <!-- <select name="Hari" class="form-control" placeholder="Pilih Hari" style="max-width: 30%;">
                           <option value="Monday">Monday</option>
                           <option value="Tuesday">Tuesday</option>
                           <option value="Wednesday">Wednesday</option>
                           <option value="Thursday">Thursday</option>
                           <option value="Friday">Friday</option>
                           <option value="Saturday">Saturday</option>
                           <option value="Sunday">Sunday</option>
                    </select>
                    <br> -->
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    
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
                   <?php if($_GET['edit']){ ?>
                   <input type="submit" name="update" class="btn btn-success" value="UPDATE">
                   <a href="index.php?menu=show_list" class="btn btn-danger">CANCEL</a>
                    <?php 
                        }
                     else{ ?>
                    <input class="btn btn-success" type="submit" name="simpan" value="SAVE" method="post">
                    <a href="index.php?menu=show_list" class="btn btn-danger">CANCEL</a>
                    <?php } ?>
                
                </form>
                </div>


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