<?php 
session_start();
	require '../dbconnect.php';




	if(isset($_POST['simpan'])){

		$id = $_POST['id'];
		$song_tittle = $_POST['song_tittle'];
		$artist = $_POST['artist'];
		$album = $_POST['album'];
		$genre = $_POST['genre'];
		$category = $_POST['category'];
		$music_file = $_POST['music_file'];
		$status = $_POST['status'];
		$urutan = $_POST['urutan'];



		$simpan = mysql_query("INSERT INTO music_chart(id,song_tittle,artist,album,genre,category,music_file,status,urutan) VALUES (NULL,'$song_tittle','$artist','$album','$genre','$category','$music_file','$status','$urutan')");

		$id_music_chart = mysql_insert_id();
		if($simpan){
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../../prambors_images_assets/chart_assets/".$id_music_chart.".jpg");
		// echo('id news '.$id_news);
			// if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../../prambors_images_assets/chart_assets/".$id_music_chart.".jpg")) {
			// 	echo "<script>alert('succes upload data')</script>";
			// }else{
			// 	echo "<script>alert('gagal upload')</script>";
			// }
		// // upload
		// 	$target_dir = "../../prambors_images_assets/chart_assets/";
		// 		// $target_file_dir = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		// 		$imageFileType = strtolower(pathinfo($target_file_dir,PATHINFO_EXTENSION));
		// 		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		// 		$uploadOk = 1;

		// 		// Check if image file is a actual image or fake image
		// 		if(isset($_POST["simpan"])) {
		// 		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		// 		    if($check !== false) {
		// 		    	// echo "<script>alert('succes upload image')</script>";
		// 		        // echo "File is an image - " . $check["mime"] . ".";
		// 		        $uploadOk = 1;
		// 		    } else {
		// 		    	echo "<script>alert('gagal upload image')</script>";
		// 		        // echo "File is not an image.";
		// 		        $uploadOk = 0;
		// 		    }
		// 		}

		// 		if ($uploadOk == 0) {
		// 		    echo "Sorry, your file was not uploaded.";
		// 		// if everything is ok, try to upload file
		// 		} else {
		// 		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$id_music_chart.".jpg")) {

		// 		        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		// 		        echo "<script>alert('succes upload image')</script>";
		// 		    } else {
		// 		        // echo "Sorry, there was an error uploading your file.";
		// 		        echo "<script>alert('gagal upload image')</script>";
		// 		    }
		// 		}
		// // end
			echo "<script>alert('Data has been Succesfully saved!')</script>";
			echo "<script>document.location.href='../index.php?menu=music_chart'</script>";
		}else{
			echo "<script>alert('error process data')</script>";
			echo "<script>document.location.href='../index.php?menu=music_chart'</script>";
		}
	}

	//UPDATE SIMPAN DATA

	if(isset($_POST['update'])){

		$id = $_POST['ID'];
		$song_tittle1 = $_POST['song_tittle'];
		$artist1 = $_POST['artist'];
		$album1 = $_POST['album'];
		$genre1 = $_POST['genre'];
		$category1 = $_POST['category'];
		$music_file1 = $_POST['music_file'];
		$status1 = $_POST['status'];
		$urutan1 = $_POST['urutan'];


		$sqlupdate = mysql_query("UPDATE music_chart SET song_tittle='$song_tittle1', artist='$artist1', album='$album1', genre='$genre1', category='$category1', music_file='$music_file1', status='$status1', urutan='$urutan1' WHERE id = '$id'");
	
		if($sqlupdate){
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../../prambors_images_assets/chart_assets/".$id.".jpg");

			echo "<script>alert('Data has been Succesfully updated!')</script>";
			echo "<script>document.location.href='../index.php?menu=music_chart'</script>";
		}else{
			echo "<script>alert('failed update data')</script>";
			echo "<script>document.location.href='../index.php?menu=music_chart'</script>";
}
	}

 ?>