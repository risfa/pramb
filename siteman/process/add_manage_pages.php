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

		$idPages = $_POST['idPages'];
		$PagesContent =dataready($_POST['PagesContent']);
		$PagesTitle = $_POST['PagesTitle'];
		$PagesHits = $_POST['PagesHits'];


		$simpan = mysql_query("INSERT INTO pages (idPages,	PagesContent,PagesTitle,PagesHits) VALUES (NULL,'$PagesContent','$PagesTitle','$PagesHits')");

		if($simpan){
			echo "<script>alert('Data has been Succesfully saved!')</script>";
			echo "<script>document.location.href='../index.php?menu=manage_pages'</script>";
		}else{
			echo "<script>alert('error proses data')</script>";
			echo "<script>document.location.href='../index.php?menu=manage_pages'</script>";
		}
	}

	//UPDATE SIMPAN DATA

	if(isset($_POST['update'])){

		$idPages = $_POST['idPages'];
		$PagesContent =$_POST['PagesContent'];
		$PagesTitle = $_POST['PagesTitle'];
		$PagesHits = $_POST['PagesHits'];


		$sqlupdate = mysql_query("UPDATE pages SET PagesTitle='$PagesTitle', PagesContent='$PagesContent', PagesHits='$PagesHits' WHERE idPages = '$idPages'");
		if($sqlupdate){
			echo "<script>alert('Data has been Succesfully Update!')</script>";
			echo "<script>document.location.href='../index.php?menu=manage_pages'</script>";
		}else{
			echo "<script>alert('failed update data')</script>";
			echo "<script>document.location.href='../index.php?menu=manage_pages'</script>";
}
	}

 ?>