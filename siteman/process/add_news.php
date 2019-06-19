<?php 
session_start();
	require '../dbconnect.php';


	function dataready($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			} 


	if(isset($_POST['simpan'])){

		$post_tittle = $_POST['post_tittle'];
		$post_content = $_POST['post_content'];
		$Category = $_POST['Category'];
		// $jumlah_hadiah = $_POST['jumlah_hadiah'];
		// $prosentase_menang = $_POST['prosentase_menang'];
		// $status_hadiah = $_POST['status_hadiah'];
		// $kategori_hadiah = $_POST['kategori_hadiah'];
		// $hadiah_spesial = $_POST['hadiah_spesial'];
		// $id_spbu = $_POST['id_spbu'];
		$date = date('Y-m-d h:i:s');
		$nama = $_SESSION['nama'];



		$simpan = mysql_query("INSERT INTO news(ID,post_author,post_date,post_content,post_title,pembuat,Category) VALUES (NULL,'test','$date','$post_content','$post_tittle','$nama','$Category')");

		$id_news = mysql_insert_id();
		if($simpan){
		// echo('id news '.$id_news);
		// upload
			$target_dir = "../../prambors_images_assets/news/";
				// $target_file_dir = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$imageFileType = strtolower(pathinfo($target_file_dir,PATHINFO_EXTENSION));
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;

				// Check if image file is a actual image or fake image
				if(isset($_POST["simpan"])) {
				    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				    	echo "<script>alert('success upload image')</script>";
				        // echo "File is an image - " . $check["mime"] . ".";
				        $uploadOk = 1;
				    } else {
				    	echo "<script>alert('failed upload image')</script>";
				        // echo "File is not an image.";
				        $uploadOk = 0;
				    }
				}

				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$id_news.".jpg")) {

				        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				        echo "<script>alert('success upload image')</script>";
				    } else {
				        // echo "Sorry, there was an error uploading your file.";
				        echo "<script>alert('failed upload image')</script>";
				    }
				}
		// end
			echo "<script>alert('Data has been Succesfully saved!')</script>";
			echo "<script>document.location.href='../index.php?menu=news'</script>";
		}else{
			echo "<script>alert('error proses data')</script>";
			echo "<script>document.location.href='../index.php?menu=news'</script>";
		}
	}

	//UPDATE SIMPAN DATA

	if(isset($_POST['update'])){

		$ID = $_POST['ID'];
		$post_tittle_update = $_POST['post_tittle'];
		$post_content_update = $_POST['post_content'];
		$date_update = date('Y-m-d h:i:s');
		$nama_update = $_SESSION['nama'];


		$sqlupdate = mysql_query("UPDATE news SET post_date='$date_update', post_content='$post_content_update', post_title='$post_tittle_update' WHERE ID = '$ID'");
		if($sqlupdate){
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../../prambors_images_assets/news/".$ID.".jpg");
			echo "<script>alert('Data has been Succesfully update!')</script>";
			echo "<script>document.location.href='../index.php?menu=news'</script>";
		}else{
			echo "<script>alert('failed update data')</script>";
			echo "<script>document.location.href='../index.php?menu=news'</script>";
}
	}

 ?>