<?php 
	if(isset($_GET['edit'])){
		$data_edit = mysql_fetch_array(mysql_query("SELECT * FROM category WHERE ID = '$_GET[edit]'"));
	}
	if(isset($_POST['update'])){
		$sql_udpate = mysql_query("UPDATE category SET Category = '$_POST[category_name]' WHERE ID = '$_GET[edit]'");
		if($sql_udpate){
			echo "<script>alert('Data has been Succesfully updated!')</script>";
			echo "<script>document.location.href='index.php?menu=news_category'</script>";
		}
	}
	if(isset($_POST['simpan'])){
		$sql_simpan = mysql_query("INSERT INTO `category` (`ID`, `Category`, `page`, `Date`) VALUES (NULL, ' $_POST[category_name]', '', CURRENT_DATE());");
		if($sql_simpan){
			echo "<script>alert('Data has been Succesfully saved!')</script>";
			echo "<script>document.location.href='index.php?menu=news_category'</script>";
		}
	}

	if(isset($_GET['delete'])){
		$sql_delete= mysql_query("DELETE FROM category WHERE ID = '$_GET[delete]'");
		if($sql_delete){
			echo "<script>alert('Data has been Succesfully Deleted!')</script>";
			echo "<script>document.location.href='index.php?menu=news_category'</script>";
		}
	}
 ?>
<!-- HTML -->
<div class="row">
	<div class="col-md-4">
		<form method="post">
			<div class="form-group">
				<label>Category Name</label>
				<input type="text" value="<?php echo $data_edit['Category'] ?>" class="form-control" name="category_name">
			</div>
			<div class="form-group">
				<?php if(!$_GET['edit']){ ?>
				<input type="submit" name="simpan" value="SAVE" class="btn btn-success">
				<a href="index.php?menu=news" class="btn btn-danger">CANCEL</a>
				<?php }else{ ?>
				<input type="submit" name="update" value="UPDATE" class="btn btn-success">
				<a href="index.php?menu=news" class="btn btn-danger">CANCEL</a>
				<?php } ?>
			</div>
		</form>
	</div>
	<div class="col-md-8">
		<table class="table">
			<thead>
				<tr>
					<td>No</td>
					<td>Category</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
					$sql = mysql_query("SELECT * FROM category");
					while($data= mysql_fetch_array($sql)){
				 ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $data['Category']; ?></td>
					<td>
						<a href="index.php?menu=news_category&edit=<?php echo $data[0] ?>"><i class="fa fa-pencil"></i>&nbsp;</a>|
						<a onclick="return confirm('Are you sure detele this category')" href="index.php?menu=news_category&delete=<?php echo $data[0] ?>"><i class="fa fa-trash"></i>&nbsp;</a>
					</td>
				</tr>
				<?php $no++; } ?>

			</tbody>
		</table>
	</div>
</div>