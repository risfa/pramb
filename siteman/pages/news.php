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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_style.min.css" rel="stylesheet" type="text/css" />
</head>
<?php 
//EDIT


//DELETE
if(isset($_GET['delete'])){
    $sqldelete = mysql_query("DELETE FROM news WHERE ID='$_GET[delete]'");
    $id_foto = $_GET['delete'];
    if($sqldelete){

       $filePath = "../../prambors_images_assets/news/".$id_foto.".jpg";

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
      echo "<script>document.location.href='index.php?menu=news'</script>";
  }else{
      echo "<script>alert('Faile Delete')</script>";
      echo "<script>document.location.href='index.php?menu=news'</script>";
  }

}

?>



<body>
    <?php
        if(isset($_GET['edit'])){
    $sqledit = mysql_query("SELECT * FROM news WHERE ID='$_GET[edit]'");
    $Data = mysql_fetch_array($sqledit);

        }
     ?>
	
    <div class="row">
    <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  id="datanya" > 

        
            <button class="btn btn-success" onclick="hide_table()">ADD DATA</button><br>
<br><br>
	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <!-- <th>Kode TRX</th> -->
                <th>ID</th>
                <th>Post Date</th>
                <!-- <th>post_content</th> -->
                <th>Post Title</th>
                <th>Images</th>
                  <th>Actions</th>
                  <th>Preview</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `news` ORDER by post_date DESC LIMIT 100";
        $query = mysql_query($sql);

        while ($row = mysql_fetch_array($query)){


    // $data_spbu = mysql_fetch_array(mysql_query("SELECT * FROM tb_spbu WHERE id_spbu = '$row[id_spbu]'"));
    // $data_customer = mysql_fetch_array(mysql_query("SELECT * FROM tb_customer WHERE id_customer = '$row[id_customer]'"));

        ?>

        	<tr>
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['post_date'];?></td>
                <!-- <td><pre><?php $temp = explode("/>", $row['post_content']);
                	 echo substr($temp[1],0,180); 
                ?></pre></td>  -->
                 <td><?php echo $row['post_title'];?></td> 
                
        <!-- 		<td><a target="blank" href="../prambors_images_assets/news/<?php echo $row['ID'];?>.jpg"><img style="height: 50px; width:50px;" src="../prambors_images_assets/news/<?php echo $row['ID'];?>.jpg"></a></td>
        		<td>
                        <a href="index.php?menu=news&edit=<?php echo $row['ID']?>">EDIT</a>
                        <a href="index.php?menu=news&delete=<?php echo $row['ID']?>">DELETE</a></td>

        	</tr> -->



                <?php
                    $filename = "../prambors_images_assets/news/".$row['ID'].".jpg";
                            if (!file_exists($filename)) {
                                

                ?>

                <td><a target="blank" href="../prambors_images_assets/news/if_foto_kosong.jpg"><img style="height: 50px; width:50px;" src="../prambors_images_assets/news/if_foto_kosong.jpg"></a></td>
                <td>

                    <?php

                            }else{
                                ?>
                <td><a target="blank" href="../prambors_images_assets/news/<?php echo $row['ID'];?>.jpg"><img style="height: 50px; width:50px;" src="../prambors_images_assets/news/<?php echo $row['ID'];?>.jpg"></a></td>
                <td>

                            <?php
                            }
                    ?>
                    
                        <a href="index.php?menu=news&edit=<?php echo $row['ID']?>"><i class="fa fa-pencil"></i>&nbsp;</a> |
                        <a href="index.php?menu=news&delete=<?php echo $row['ID']?>"><i class="fa fa-trash"></i>&nbsp;</a></td>

                        <td><a target="_blank" href="https://joker.5dapps.com/masimanetwork/prambors/pages/news_details.php?details=<?php echo $row['ID']?>"><i class="fa fa-search"></i>&nbsp;</a></td>

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
            <center><h2>FORM Input News</h2></center>

                <div>  
            <form enctype="multipart/form-data" class="form-group"  method="post" action="process/add_news.php">
                <!-- <input  name="id_hadiah" value="<?php echo $Data[0]?>"> -->

                    <div id="temp_image"></div>
                     <input  type="hidden" class="form-control" type="text"  value="<?php echo $Data['ID']?>" name="ID" placeholder="ID" >
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <label>Title</label>
                             <input class="form-control md-6" type="text" name="post_tittle" placeholder="Post Title"  required="" value="<?php echo $Data['post_title']?>">
                        </div>
                        <div class="col-md-6">
                            <label>Category</label>
                            <select name="category" class="form-control">
                                <?php  
                                    $sql = mysql_query("SELECT * FROM category");
                                    while($data= mysql_fetch_array($sql)){
                                ?>
                                <option value="<?php echo $data[0] ?>"><?php echo $data['Category'] ?></option>
                                <?php } ?>
                            </select>
                             <br>
                   	
                        </div>
                        <div class="col-md-12">
                   		 <textarea id="post_content" class="ckeditor" name="post_content"><?php echo $Data['post_content']?></textarea>
                       <!-- <textarea   name="post_content"><?php echo $Data['post_content']?></textarea>
                   		  -->
                    <br>
                    <input type="file" name="fileToUpload" id="fileToUpload"> 
                    <br>
                     <?php if($_GET['edit']){ ?>
                   <input type="submit" name="update" class="btn btn-success" value="UPDATE">
                   <a href="index.php?menu=news" class="btn btn-danger">CANCEL</a>
                    <?php 
                        }
                     else{ ?>
                    <input class="btn btn-success" type="submit" name="simpan" value="SAVE" method="post">
                    <a href="index.php?menu=news" class="btn btn-danger">CANCEL</a>
                    <?php } ?>
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

      // forala wsyswyg

      // $('textarea').froalaEditor()
	   $('#example').DataTable({
        "order": [[ 0, "desc" ]]
       });

 
            
	} );

	</script>

  <!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>


    
</body>
</html>

<script type="text/javascript">

					// CKEDITOR.replace( 'post_content' );
					// CKEDITOR.replace( 'post_content', {
					//     language: 'fr',
					//     uiColor: '#9AB8F3',

					// });


					// var editor = CKEDITOR.instances.post_content;
					// // editor.config.colorButton_colors = 'CF5D4E,454545,FFF,CCC,DDD,CCEAEE,66AB16';
					// // editor.config.colorButton_enableAutomatic = false;
					// // editor.config.colorButton_foreStyle = {
					// //     element: 'font',
					// //     attributes: { 'color': '#222222' }
					// // };

					// editor.config.colorButton_backStyle = {
					//     element: 'p',
					//     styles: { 'background-color': '#222222' }
					// };
					// alert( editor.config.colorButton_backStyle.element );


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