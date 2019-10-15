<?php 
session_start();
require 'config.php';

if (isset($_POST['delete_btn'])) {
	$id=$_POST['delete_id'];
	$sql="delete from user  where id='$id'";
	$run=mysqli_query($conn,$sql);	

	if($run){
		$_SESSION['success']="Xóa thành công";
		header('Location:admin.php');
	}
	else {
		$_SESSION['status']="Xóa thất bại";
		header('Location:admin.php');
	}	
}


 ?>