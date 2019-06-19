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
    $sqledit = mysql_query("SELECT * FROM music_chart WHERE id='$_GET[edit]'");
    $Data = mysql_fetch_array($sqledit);
}

//DELETE
if(isset($_GET['delete'])){
    $sqldelete = mysql_query("DELETE FROM music_chart WHERE id='$_GET[delete]'");
    if($sqldelete){
        $filePath = "../../prambors_images_assets/chart_assets/".$_GET['delete'].".jpg";

       // $filePath = $id_foto.".jpg";
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
      echo "<script>document.location.href='index.php?menu=music_chart'</script>";
  }else{
      echo "<script>alert('Gagal Delete')</script>";
      echo "<script>document.location.href='index.php?menu=music_chart'</script>";
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
                <!-- <th>Kode TRX</th> -->
                <th>ID</th>
                <th>Song Title</th>
                <!-- <th>post_content</th> -->
                <th>Artists</th>
                <th>Album</th>
                <!-- <th>genre</th> -->
                <th>Category</th>
                <th>Music File</th>
                <!-- <th>post_content</th> -->
                <th>Status</th>
                <th>Orders</th>
                <th>Images</th>
                  <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `music_chart` ";
        $query = mysql_query($sql);

        while ($row = mysql_fetch_array($query)){


    // $data_spbu = mysql_fetch_array(mysql_query("SELECT * FROM tb_spbu WHERE id_spbu = '$row[id_spbu]'"));
    // $data_customer = mysql_fetch_array(mysql_query("SELECT * FROM tb_customer WHERE id_customer = '$row[id_customer]'"));

        ?>

        	<tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['song tittle'];?></td>
                <td><?php echo $row['artist'];?></td>
                <td><?php echo $row['album'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><?php echo $row['music file'];?></td>
                <td><?php echo $row['status'];?></td>
                <td><?php echo $row['urutan'];?></td>
                <!-- <td><pre><?php $temp = explode("/>", $row['post_content']);
                	 echo substr($temp[1],0,180); 
                ?></pre></td>  -->

<!--         		<td><a target="blank" href="../prambors_images_assets/chart_assets/<?php echo $row['id'];?>.jpg"><img style="height: 50px; width:50px;" src="../prambors_images_assets/chart_assets/<?php echo $row['id'];?>.jpg"></a></td>
        		<td>
                        <a href="index.php?menu=music_chart&edit=<?php echo $row['id']?>">EDIT</a>
                        <a href="index.php?menu=music_chart&delete=<?php echo $row['id']?>">DELETE</a></td>
 -->

              
            <?php
                    $filename = "../prambors_images_assets/chart_assets/".$row['id'].".jpg";
                            if (!file_exists($filename)) {
                                  

                ?>

                <td><a target="blank" href="../prambors_images_assets/chart_assets/if_foto_kosong.jpg"><img style="height: 50px; width:50px;" src="../prambors_images_assets/chart_assets/if_foto_kosong.jpg"></a></td>
                <td>

                    <?php

                            }else{
                                ?>
                <td><a target="blank" href="../prambors_images_assets/chart_assets/<?php echo $row['id'];?>.jpg"><img style="height: 50px; width:50px;" src="../prambors_images_assets/chart_assets/<?php echo $row['id'];?>.jpg"></a></td>

                <td>
                            <?php
                            }
                    ?>
                      
                        <a href="index.php?menu=music_chart&edit=<?php echo $row['id']?>"><i class="fa fa-pencil"></i>&nbsp;</a> |
                        <a href="index.php?menu=music_chart&delete=<?php echo $row['id']?>"><i class="fa fa-trash"></i>&nbsp;</a></td>
          </td> 



        	</tr>

        <?php } ?>
        </tbody>
    </table>
    </div>
    </div>




    <div class="container" >
      <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="formnya" style="display: none;">
            <br>
            <center><h2>FORM Input Music Chart</h2></center>

                <div>  
            <form enctype="multipart/form-data" class="form-group"  method="post" action="process/add_music_chart.php">
                <!-- <input  name="id_hadiah" value="<?php echo $Data[0]?>"> -->

                    <div id="temp_image"></div>
                     <input  type="hidden" class="form-control" type="text"  value="<?php echo $Data['id']?>" name="ID" placeholder="ID" >
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-6" >
                            <label>Song Title</label>
                             <input class="form-control md-6" type="text" name="song_tittle" placeholder="Song Title"  required="" value="<?php echo $Data['song_tittle']?>">
                             <br>
                             <label>Artist</label>
                             <input class="form-control md-6" type="text" name="artist" placeholder="Artist"  required="" value="<?php echo $Data['artist']?>">
                             <br>
                             <label>Album</label>
                             <input class="form-control md-6" type="text" name="album" placeholder="Album"  required="" value="<?php echo $Data['album']?>">
                             <br>
                             <label>Genre</label>
                             <input class="form-control md-6" type="text" name="genre" placeholder="Genre"  required="" value="<?php echo $Data['genre']?>">
                    <br>
                    <label>File</label>
                     <input class="form-control md-6" type="text" name="music_file" placeholder="Music File"  required="" value="<?php echo $Data['music_file']?>">
                    <br>
                        <label>Position</label>
                        <select name="status" class="form-control md-6">
                            <option value="<?php echo $Data['status']?>"><?php echo $Data['status']?></option>
                            <option value="up">up</option>
                            <option value="stay">stay</option>
                            <option value="down">down</option>
                        </select>
                     <!-- <input class="form-control md-6" type="text" name="status" placeholder="status"  required="" value="<?php echo $Data['status']?>"> -->
                    <br>
                    <label>Sequence</label>    
                     <input class="form-control md-6" type="text" name="urutan" placeholder="Order"  required="" value="<?php echo $Data['urutan']?>">
                    <br>
                    <label>Artist Image</label>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                    <?php if($_GET['edit']){ ?>
                   <input type="submit" name="update" class="btn btn-success" value="UPDATE">
                   <button class="btn btn-danger" onclick="hide_form()">CANCEL</button>
                    <?php 
                        }
                     else{ ?>
                    <input style="margin-left: 1%;" class="btn btn-success" type="submit" name="simpan" value="SAVE" method="post">
                    <button class="btn btn-danger" onclick="hide_form()">CANCEL</button>
                    <?php } ?>
                        </div>
                        <div class="col-md-6">
                            <label>Category</label>
                        <select name="category" class="form-control" value="<?php echo $DataTable['category']?>" >
                            <option value="bubblingupsonglist">Bubbling Up Song</option>
                            <option value="top40">Top40</option>
                            <option value="newrelease">New Release</option>
                         </select>
                        </div>
                    
                    <br><br>
                   

                    <br>
                     
                    <br>
                    </div>


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