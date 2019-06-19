<?php 
	require '../dbconnect.php';

	if(isset($_POST['simpan'])){

			
			$nomor_spbu =$_POST['nomor_spbu']; 
			$alamat_spbu =$_POST['alamat_spbu'];
			
			
	$simpan =mysql_query("INSERT INTO tb_spbu(id_spbu,nomor_spbu,alamat_spbu) VALUES(NULL,'$nomor_spbu','$alamat_spbu')");
		$Data = mysql_fetch_array($simpan);

	if($simpan){
		echo "<script>alert('yes')</script>";
		echo "<script>document.location.href='../index.php?menu=spbu'</script>";
	}else{
		echo "<script>alert('no')</script>";
		echo "<script>document.location.href='../index.php?menu=spbu'</script>";
	}
}

//UPDATE SIMPAN DATA

	if(isset($_POST['update'])){
		$id_spbu =$_POST['id_spbu']; 
		$nomor_spbu =$_POST['nomor_spbu']; 
		$alamat_spbu =$_POST['alamat_spbu']; 
		

		$update = mysql_query("UPDATE tb_spbu SET nomor_spbu ='$nomor_spbu', alamat_spbu='$alamat_spbu' WHERE id_spbu='$_POST[id_spbu]'");
		if($update){
			echo "<script>alert('yes')</script>";
			echo "<script>document.location.href='../index.php?menu=spbu'</script>";
		}else{
			echo "<script>alert('no')</script>";
			echo "<script>document.location.href='../index.php?menu=spbu'</script>";
}
	}
 ?>